<?php

namespace App\Traits\Center\Laboratory\Results;

use DB;

trait ClinicalLaboratoryTrait {

    /**
     * Load Clinical laboratory results
     *
     * @return array
     */
    public function loadClinicalLaboratoryResult($resultRaw, $localization, $patientGender, $laboratorySettings)
    {

        if ($resultRaw['PROFILE']) {

            $result = $this->getProfileResults($resultRaw, $localization, $patientGender, $laboratorySettings);

            return $result;
        }

        $result = $this->getResult($resultRaw, $localization, $patientGender, $laboratorySettings);

        return $result;
    }

    /**
     * Get clinical laboratory result
     *
     * @return array
     */
    public function getResult($resultRaw, $localization, $patientGender, $laboratorySettings)
    {
        $resultLowHighStatus = $this->getLowAndHighResultStatus(
            $resultRaw['RESULT_VALUE'],
            $resultRaw['LOW_LIMIT_MALE'],
            $resultRaw['HIGH_LIMIT_MALE'],
            $resultRaw['LOW_LIMIT_FEMALE'],
            $resultRaw['HIGH_LIMIT_FEMALE'],
            $patientGender,
            $laboratorySettings
        );

        $resultValueDisplayStatus = $this->checkResultValueDisplayStatus($resultRaw['COMPLETED'], $laboratorySettings);

        $impossibleResultValueStatus = $this->getImpossibleResultValueStatus(
            $resultRaw['RESULT_VALUE'],
            $resultRaw['CRITICAL_LOW_LIMIT'],
            $resultRaw['CRITICAL_HIGH_LIMIT']
        );

        $result = [
            'result_id' => $resultRaw['ID'],
            'result_type_id' => $resultRaw['RESULT_TYPE'],
            'result_blank' => config('lab-results.blank_types.clinical_laboratory'),
            'result_blank_type_id' => config('lab-results.result_types.clinical_laboratory'),
            'result_technological_group_id' => $resultRaw['RESULT_TECHNOLOGICAL_GROUP_ID'],
            'result_technological_group_name' => $resultRaw['RESULT_TECHNOLOGICAL_GROUP_NAME'],
            'result_name' => ($localization == 'bg') ? $resultRaw['NAME'] : $resultRaw['NAME_EN'],
            'result_completed' => $resultRaw['COMPLETED'],
            'result_profile' => $resultRaw['PROFILE'],
            'result_profile_data' => null,
            'result_value' => ((!$impossibleResultValueStatus) && ($resultValueDisplayStatus)) ? $resultRaw['RESULT_VALUE'] : null,
            'result_display_low_high_status' => ((!$impossibleResultValueStatus) && ($resultValueDisplayStatus)) ? true : false,
            'result_low_status' => $resultLowHighStatus['resultLowStatus'],
            'result_high_status' => $resultLowHighStatus['resultHighStatus'],
            'result_units' => $resultRaw['UNITS'],
            'result_reference_values' => $resultRaw['REFERENCE_VALUES'],
            'result_test_method' => $resultRaw['TEST_METHOD'],
            'result_code' => $resultRaw['CODE'],
            'result_low_limit_male' => $resultRaw['LOW_LIMIT_MALE'],
            'result_high_limit_male' => $resultRaw['HIGH_LIMIT_MALE'],
            'result_low_limit_female' => $resultRaw['LOW_LIMIT_FEMALE'],
            'result_high_limit_female' => $resultRaw['HIGH_LIMIT_FEMALE'],
            'result_critical_low_limit' => $resultRaw['CRITICAL_LOW_LIMIT'],
            'result_critical_high_limit' => $resultRaw['CRITICAL_HIGH_LIMIT'],
        ];

        return $result;
    }

    /**
     * Get Clinical laboratory profile results
     *
     * @return array
     */
    public function getProfileResults($resultRaw, $localization, $patientGender, $laboratorySettings)
    {
        $resultProfile = $this->loadProfileResults($resultRaw['ID'], $localization, $patientGender, $laboratorySettings);

        $result = [
            'result_id' => $resultRaw['ID'],
            'result_type_id' => $resultRaw['RESULT_TYPE'],
            'result_blank' => config('lab-results.blank_types.clinical_laboratory'),
            'result_blank_type_id' => config('lab-results.result_types.clinical_laboratory'),
            'result_technological_group_id' => $resultRaw['RESULT_TECHNOLOGICAL_GROUP_ID'],
            'result_technological_group_name' => $resultRaw['RESULT_TECHNOLOGICAL_GROUP_NAME'],
            'result_name' => ($localization == 'bg') ? $resultRaw['NAME'] : $resultRaw['NAME_EN'],
            'result_code' => $resultRaw['CODE'],
            'result_completed' => $resultRaw['COMPLETED'],
            'result_profile' => $resultRaw['PROFILE'],
            'result_profile_data' => $resultProfile,
        ];

        return $result;
    }

    /**
     * Load Clinical laboratory profile results
     *
     * @return array
     */
    public function loadProfileResults($resultId, $localization, $patientGender, $laboratorySettings)
    {
        $profileResultsRaw = $this->getProfileResultsCollection($resultId);
        $profileResults = [];

        foreach ($profileResultsRaw as $profileRaw) {

            $profileResultLowHighStatus = $this->getLowAndHighResultStatus(
                $profileRaw['PROFILE_RESULT_VALUE'],
                $profileRaw['PROFILE_RESULT_LOW_MAN'],
                $profileRaw['PROFILE_RESULT_HIGH_MAN'],
                $profileRaw['PROFILE_RESULT_LOW_WOMAN'],
                $profileRaw['PROFILE_RESULT_HIGH_WOMAN'],
                $patientGender,
                $laboratorySettings
            );

            $resultValueDisplayStatus = $this->checkResultValueDisplayStatus($profileRaw['PROFILE_RESULT_COMPLETED'], $laboratorySettings);

            $impossibleResultValueStatus = $this->getImpossibleResultValueStatus(
                $profileRaw['PROFILE_RESULT_VALUE'],
                $profileRaw['PROFILE_RESULT_LOW_CRITICAL'],
                $profileRaw['PROFILE_RESULT_HIGH_CRITICAL']
            );

            $profile = [
                'profile_result_name' => ($localization == 'bg') ? $profileRaw['PROFILE_RESULT_NAME'] : $profileRaw['PROFILE_RESULT_NAME_EN'],
                'profile_result_value' => ((!$impossibleResultValueStatus) && ($resultValueDisplayStatus)) ? $profileRaw['PROFILE_RESULT_VALUE'] : null,
                'profile_result_display_low_high_status' => ((!$impossibleResultValueStatus) && ($resultValueDisplayStatus)) ? true : false,
                'profile_result_low_status' => $profileResultLowHighStatus['resultLowStatus'],
                'profile_result_high_status' => $profileResultLowHighStatus['resultHighStatus'],
                'profile_result_units' => $profileRaw['PROFILE_RESULT_UNITS'],
                'profile_result_reference_values' => $profileRaw['PROFILE_RESULT_REF_VALUES'],
                'profile_result_test_method' => $profileRaw['PROFILE_RESULT_TEST_METHOD'],
                'profile_result_low_limit_woman' => $profileRaw['PROFILE_RESULT_LOW_WOMAN'],
                'profile_result_high_limit_woman' => $profileRaw['PROFILE_RESULT_HIGH_WOMAN'],
                'profile_result_low_limit_man' => $profileRaw['PROFILE_RESULT_LOW_MAN'],
                'profile_result_high_limit_man' => $profileRaw['PROFILE_RESULT_HIGH_MAN'],
                'profile_result_critical_low_limit' => $profileRaw['PROFILE_RESULT_LOW_CRITICAL'],
                'profile_result_critical_high_limit' => $profileRaw['PROFILE_RESULT_HIGH_CRITICAL'],
                'profile_result_completed' => $profileRaw['PROFILE_RESULT_COMPLETED'],
            ];

            $profileResults[] = $profile;
        }

        return $profileResults;
    }

    /**
     * Get Profile results collection
     *
     * @return array
     */
    public function getProfileResultsCollection($resultId)
    {
        $queryString = 'SELECT
                            rezultat_profil.ime AS profile_result_name,
                            rezultat_profil.engname AS profile_result_name_en,
                            rezultat_profil.rezultat AS profile_result_value,
                            rezultat_profil.edinici AS profile_result_units,
                            rezultat_profil.ref_st AS profile_result_ref_values,
                            rezultat_profil.test_metod AS profile_result_test_method,
                            rezultat_profil.otwoman AS profile_result_low_woman,
                            rezultat_profil.dowoman AS profile_result_high_woman,
                            rezultat_profil.otman AS profile_result_low_man,
                            rezultat_profil.doman AS profile_result_high_man,
                            rezultat_profil.kritot AS profile_result_low_critical,
                            rezultat_profil.kritdo AS profile_result_high_critical,
                            rezultat_profil.izpulneno AS profile_result_completed
                        FROM rezultat_profil
                        WHERE fidrezultat = :idResult
                        ORDER BY rezultat_profil.kod';

        $profileResultsCollection = DB::connection('firebird')
            ->select($queryString, [
                'idResult' => $resultId
            ]);

        $profileResultsRaw = [];

        foreach ($profileResultsCollection as $profileResult) {
            $profileResultsRaw[] = $this->convertSingleArrayEncodingWIN1251ToUTF8((array)$profileResult);
        }

        return $profileResultsRaw;
    }

    /**
     * Get low and high result status
     *
     * @return array
     */
    public function getLowAndHighResultStatus(
        $resultValue,
        $resultLowLimitMale,
        $resultHighLimitMale,
        $resultLowLimitFemale,
        $resultHighLimitFemale,
        $patientGender,
        $laboratorySettings)
    {
        if ($patientGender) {
            // Check Low and High result status for a woman
            $resultStatus = $this->checkLowOrHighResultStatus($resultValue, $resultLowLimitFemale, $resultHighLimitFemale, $laboratorySettings);
        } else {
            // Check Low and High result status for a man
            $resultStatus = $this->checkLowOrHighResultStatus(
                $resultValue,
                $resultLowLimitMale,
                $resultHighLimitMale,
                $laboratorySettings
            );
        }

        return $resultStatus;
    }


    /**
     * Check result for low and high values
     *
     * @return array
     */
    public function checkLowOrHighResultStatus($resultValue, $resultLowLimit, $resultHighLimit, $laboratorySettings)
    {
        if(!is_null($resultValue)) {
            $resultValue = floatval(str_replace(',', '.', $resultValue));
        }

        $resultLowAndHighStatus = [
            'resultLowStatus' => false,
            'resultHighStatus' => false,
        ];

        if ((!is_null($resultLowLimit)) &&
            ((float)$resultHighLimit > 0) &&
            (is_numeric($resultValue)) &&
            ($laboratorySettings['SHOWLOW'] == 1)) {

            if ($resultValue < (float)$resultLowLimit) {
                $resultLowAndHighStatus['resultLowStatus'] = true;
            }

            if ($resultValue > (float)$resultHighLimit) {
                $resultLowAndHighStatus['resultHighStatus'] = true;
            }
        }

        return $resultLowAndHighStatus;
    }

    /**
     * Check result value display status
     *
     * @return boolean
     */
    public function checkResultValueDisplayStatus($resultReadyStatus, $laboratorySettings)
    {
        if (($resultReadyStatus == 1) && ($laboratorySettings['VALIDIRANE'] == 1)) {
            return true;
        }

        return false;
    }

    /**
     * Get result imspossible value status
     *
     * @return boolean
     */
    public function getImpossibleResultValueStatus($result, $criticalLowLimit, $criticalHighLimit)
    {
        if ((!is_null($criticalHighLimit)) &&
            ($criticalLowLimit != -1) &&
            ($criticalHighLimit != -1) &&
            (is_numeric($result))) {

            if (($result < $criticalLowLimit) ||
                ($result > $criticalHighLimit)) {
                return true;
            }
        }

        return false;
    }
}
