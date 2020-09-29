<?php

namespace App\Traits\Center\Laboratory\Doctor;

use Config;
use DB;

trait DoctorRecordTrait {

    /**
     * Check for doctor record
     *
     * @return array doctor record
     * @return boolean
     */
    public function checkForDoctorRecord($requestData)
    {
        $queryString = 'SELECT
                            COUNT(*),
                            lekar.id AS doctor_id,
                            lekar.ime AS doctor_first_name,
                            lekar.familia AS doctor_last_name,
                            lekar.uin AS doctor_uin,
                            lekar.praktika AS doctor_practice
                        FROM lekar
                        WHERE lekar.uin = :uin
                            AND lekar.pass = :password
                        GROUP BY id, ime, familia, uin, praktika';

        $doctorRecordRaw = DB::connection('firebird')
            ->select($queryString, [
                'uin' => $requestData['doctorUIN'],
                'password' => $requestData['doctorPassword'],
            ]);

        if ($doctorRecordRaw) {
            // Convert array encoding from Windows-1251 to UTF-8
            $doctorRecordConverted = $this->convertSingleArrayEncodingWIN1251ToUTF8((array)$doctorRecordRaw[0]);

            $doctorRecord = [
                'doctor_id' => $doctorRecordConverted['DOCTOR_ID'],
                'doctor_title' => ($requestData['localization'] == 'bg') ? 'Д-р' : 'MD',
                'doctor_first_name' => $this->localize($doctorRecordConverted['DOCTOR_FIRST_NAME'], $requestData['localization']),
                'doctor_last_name' => $this->localize($doctorRecordConverted['DOCTOR_LAST_NAME'], $requestData['localization']),
                'doctor_uin' => $doctorRecordConverted['DOCTOR_UIN'],
                'doctor_practice' => $doctorRecordConverted['DOCTOR_PRACTICE'],
            ];

            $doctorRecord['doctor_first_name'] = mb_convert_case(mb_strtolower($doctorRecord['doctor_first_name']), MB_CASE_TITLE, "UTF-8");
            $doctorRecord['doctor_last_name'] = mb_convert_case(mb_strtolower($doctorRecord['doctor_last_name']), MB_CASE_TITLE, "UTF-8");

            return $doctorRecord;
        }

        return false;
    }


    public function loadDoctorReferrals($requestData, $doctorRecord)
    {
        $doctorReferralsList = $this->getDoctorReferralsList($requestData, $doctorRecord);

        $doctorReferrals = [
            'doctor_referrals' => $doctorReferralsList,
        ];

        return $doctorReferrals;
    }


    public function getDoctorReferralsList($requestData, $doctorRecord)
    {
        $queryString = 'SELECT
                        	napravlenie.id AS referral_id,
                            napravlenie.idepruvetka AS referral_examination_sample_id,
                        	napravlenie.fidpac AS referral_patient_id,
                        	napravlenie.nomermdd AS referral_mdd_number,
                        	napravlenie.dataizd AS referral_date_of_issue,
                        	napravlenie.data AS referral_date,
                            napravlenie.izpulneno AS referral_completed,
                        	pacient.ime AS patient_first_name,
                        	pacient.prezime AS patient_middle_name,
                        	pacient.familia AS patient_last_name,
                            pacient.egn AS patient_egn,
                        	sum(artikul_napr.cena_struva) AS referral_item_sum,
                            shema_prod.id AS scheme_of_sale_id,
                        	shema_prod.ime AS scheme_of_sale_name,
                        	lekar.procent AS doctor_percentage,
                        	lekar.procent_nzok AS doctor_percentage_nzok
                        FROM napravlenie
                            LEFT JOIN pacient ON (pacient.id = napravlenie.fidpac)
                            LEFT JOIN artikul_napr ON (artikul_napr.fidnapr = napravlenie.id)
                            LEFT JOIN lekar ON (lekar.id = napravlenie.fidlek)
                            LEFT JOIN artikul ON (artikul.id = artikul_napr.fidartikul)
                            LEFT JOIN shema_prod ON (shema_prod.id = napravlenie.fidshema_prod)
                        WHERE (napravlenie.fidlek = :doctorId)
                            AND (napravlenie.data >= :dateFrom)
                            AND (napravlenie.data <= :dateTo)
                            AND (napravlenie.iztrito = 0)';

        if ($requestData['patientEgn']) {
            $patientEgn = iconv('utf-8', 'windows-1251', $requestData['patientEgn']);
            $queryString .= " AND (upper(pacient.egn collate pxw_cyrl) like upper('$patientEgn%' collate pxw_cyrl)) ";
        }

        if ($requestData['patientLastName']) {
            $patientLastName = iconv('utf-8', 'windows-1251', $requestData['patientLastName']);
            $queryString .= " AND (upper(pacient.familia collate pxw_cyrl) like upper('$patientLastName%' collate pxw_cyrl)) ";
        }

        if ($requestData['cipher']) {
            $cipher = iconv('utf-8', 'windows-1251', $requestData['cipher']);
            $queryString .= " AND (upper(napravlenie.pacshifar collate pxw_cyrl) like upper('$cipher%' collate pxw_cyrl)) ";
        }

        $queryString .= " GROUP BY
                shema_prod.id,
                shema_prod.ime,
                napravlenie.nomermdd,
                napravlenie.dataizd,
                napravlenie.data,
                pacient.egn,
                pacient.ime,
                pacient.prezime,
                pacient.familia,
                napravlenie.fidpac,
                napravlenie.id,
                lekar.procent,
                lekar.procent_nzok,
                napravlenie.idepruvetka,
                napravlenie.izpulneno
            ORDER BY napravlenie.data DESC";

        $referralsListRaw = DB::connection('firebird')
            ->select($queryString, [
                'doctorId' => $doctorRecord['doctor_id'],
                'dateFrom' => $requestData['dateFrom'],
                'dateTo' => $requestData['dateTo'],
            ]);

        $referralsListConverted = [];

        foreach ($referralsListRaw as $referralRaw) {
            $referralsListConverted[] = $this->convertSingleArrayEncodingWIN1251ToUTF8((array)$referralRaw);
        }

        $referralsList = [];

        foreach ($referralsListConverted as $referral) {

            $patientFirstName = $this->localize($referral['PATIENT_FIRST_NAME'], $requestData['localization']);
            $patientMiddleName = $this->localize($referral['PATIENT_MIDDLE_NAME'], $requestData['localization']);
            $patientLastName = $this->localize($referral['PATIENT_LAST_NAME'], $requestData['localization']);

            $referralsList[] = [
                'referral_id' => $referral['REFERRAL_ID'],
                'referral_examination_sample_id' => $referral['REFERRAL_EXAMINATION_SAMPLE_ID'],
                'referral_patient_id' => $referral['REFERRAL_PATIENT_ID'],
                'referral_mdd_number' => $referral['REFERRAL_MDD_NUMBER'],
                'referral_date_of_issue' => $referral['REFERRAL_DATE_OF_ISSUE'],
                'referral_date' => $referral['REFERRAL_DATE'],
                'referral_patient_first_name' => mb_convert_case(mb_strtolower($patientFirstName), MB_CASE_TITLE, "UTF-8"),
                'referral_patient_middle_name' => mb_convert_case(mb_strtolower($patientMiddleName), MB_CASE_TITLE, "UTF-8"),
                'referral_patient_last_name' => mb_convert_case(mb_strtolower($patientLastName), MB_CASE_TITLE, "UTF-8"),
                'referral_patient_egn' => $referral['PATIENT_EGN'],
                'referral_item_sum' => $referral['REFERRAL_ITEM_SUM'],
                'referral_scheme_of_sale_id' => $referral['SCHEME_OF_SALE_ID'],
                'referral_scheme_of_sale_name' => $this->localize($referral['SCHEME_OF_SALE_NAME'], $requestData['localization']),
                'referral_doctor_percentage' => $referral['DOCTOR_PERCENTAGE'],
                'referral_doctor_percentage_nzok' => $referral['DOCTOR_PERCENTAGE_NZOK'],
                'referral_completed' => $referral['REFERRAL_COMPLETED'],
            ];
        }

        if (config('lab-results.scheme_of_sales_calculation.for_doctor')) {
            $schemeOfSalesCalculation = $this->getSchemeOfSalesCalculation($referralsList, $requestData['localization']);
        }

        return $referralsList;
    }

    public function getSchemeOfSalesCalculation($referralsList, $localization)
    {
        $referralsListSorted = collect($referralsList)->sortBy('referral_scheme_of_sale_id');
        $current_sale_id = 0;
        $schemes = [];

        foreach ($referralsListSorted as $referral) {

            if ($current_sale_id != $referral['referral_scheme_of_sale_id']) {

                $currentScheme = [
                    'scheme_id' => $referral['referral_scheme_of_sale_id'],
                    'scheme_name' => $this->localize($referral['referral_scheme_of_sale_name'], $localization),
                    'scheme_report' => [],
                ];

                $schemes[] = $currentScheme;
            }

            $current_sale_id = $referral['referral_scheme_of_sale_id'];
        }

        $currentSchemeId = 0;
        $totalAmount = 0;

        foreach ($schemes as $scheme) {

            $currentSchemeId = $scheme['scheme_id'];

            $currentSchemeReport = [
                'scheme_amount' => 0,
                'scheme_per'

            ];

            foreach ($referralsListSorted as $referral) {

                if ($currentSchemeId == $referral['referral_scheme_of_sale_id']) {

                    $currentSchemeReport['scheme_total_amount'] = 0;


                }

            }

            $scheme['scheme_report'] = $currentSchemeReport;
        }




        // if ($referral['referral_scheme_of_sale_id'] == 1) {
        //     $nzokSum = $nzokSum + $referral['referral_item_sum'];
        // }
        //
        //
        //

        dd($schemes);
    }
}
