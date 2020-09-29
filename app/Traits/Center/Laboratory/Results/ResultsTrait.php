<?php

namespace App\Traits\Center\Laboratory\Results;

use DB;

trait ResultsTrait {

    /**
     * Load laboratory information
     *
     * @return array
     */
    public function getLaboratoryData()
    {
        $queryString = 'SELECT * FROM obshta';
        $laboratoryDataRaw = DB::connection('firebird')->select($queryString);
        $laboratoryData = $this->convertSingleArrayEncodingWIN1251ToUTF8((array)$laboratoryDataRaw[0]);

        return $laboratoryData;
    }

    /**
     * Load general examination information
     *
     * @return array
     */
    public function getGeneralExaminationData($idExaminationSample, $locale)
    {
        $queryString = 'SELECT
                            napravlenie.data,
                            napravlenie.idepruvetka,
                            napravlenie.filial,
                            napravlenie.lekarstvo,
                            napravlenie.zabelezka,
                            napravlenie.plateno,
                            lekar.ime AS ime_lekar,
                            lekar.familia AS familia_lekar,
                            lekar.uin AS uin,
                            pacient.ime AS ime_pacient,
                            pacient.prezime AS prezime_pacient,
                            pacient.familia AS familia_pacient,
                            pacient.egn,
                            pacient.inic,
                            pacient.age,
                            pacient.pol
                        FROM napravlenie, pacient, lekar
                        WHERE napravlenie.idepruvetka = :idExaminationSample
                            AND (pacient.id = napravlenie.fidpac)
                            AND (lekar.id = napravlenie.fidlek)
                        ROWS 1';

        $generalExaminationDataRaw = DB::connection('firebird')
            ->select($queryString, ['idExaminationSample' => $idExaminationSample]);

        $generalExaminationData = $this->prepareGeneralExaminationData((array)$generalExaminationDataRaw[0], $locale);

        return $generalExaminationData;
    }

    /**
     * Prepare general examination information
     *
     * @return array
     */
    protected function prepareGeneralExaminationData($examinationDataRaw, $locale)
    {
        // Convert array encoding from Windows-1251 to UTF-8
        $examinationData = $this->convertSingleArrayEncodingWIN1251ToUTF8($examinationDataRaw);

        $generalExaminationData = [
            'examination_date' => $examinationData['DATA'],
            'examination_sample_id' => $examinationData['IDEPRUVETKA'],
            'doctor_first_name' => $this->localize($examinationData['IME_LEKAR'], $locale),
            'doctor_last_name' => $this->localize($examinationData['FAMILIA_LEKAR'], $locale),
            'doctor_uin' => $examinationData['UIN'],
            'affiliate_name' => $this->localize($examinationData['FILIAL'], $locale),
            'patient_first_name' => $this->localize($examinationData['IME_PACIENT'], $locale),
            'patient_middle_name' => $this->localize($examinationData['PREZIME_PACIENT'], $locale),
            'patient_last_name' => $this->localize($examinationData['FAMILIA_PACIENT'], $locale),
            'patient_egn' => $examinationData['EGN'],
            'patient_age' => $examinationData['AGE'],
            'patient_gender' => $examinationData['POL'],
            'patient_inic' => $examinationData['INIC'],
            'examination_note' => $examinationData['ZABELEZKA'],
            'medicine' => $examinationData['LEKARSTVO'],
            'payment_confirmed' => $examinationData['PLATENO'],
        ];

        return $generalExaminationData;
    }

    /**
     * Load examination results
     *
     * @return array
     */
    public function getExaminationResults($idExaminationSample, $locale, $patientGender, $laboratoryData)
    {
        $queryString = 'SELECT
                            rezultat.id AS id,
                            rezultat.ime AS name,
                            rezultat.engname AS name_en,
                            rezultat.izpulneno AS completed,
                            rezultat.profil AS profile,
                            rezultat.rezultat AS result_value,
                            rezultat.edinici AS units,
                            rezultat.ref_st AS reference_values,
                            rezultat.test_metod AS test_method,
                            rezultat.kod AS code,
                            rezultat.otman AS low_limit_male,
                            rezultat.doman AS high_limit_male,
                            rezultat.otwoman AS low_limit_female,
                            rezultat.dowoman AS high_limit_female,
                            rezultat.kritot AS critical_low_limit,
                            rezultat.kritdo AS critical_high_limit,
                            rezultat.akreditiran AS accredited,
                            rezultat.material AS material_type,
                            napravlenie.collection AS date_of_collection,
                            rezultat.kulturelno1 AS cultivation_of_microorganisms_1,
                            rezultat.kulturelno2 AS cultivation_of_microorganisms_2,
                            rezultat.kulturelno3 AS cultivation_of_microorganisms_3,
                            rezultat.kulturelno4 AS cultivation_of_microorganisms_4,
                            rezultat.kulturelno5 AS cultivation_of_microorganisms_5,
                            rezultat.izoliran1 AS isolated_microorg_1,
                            rezultat.izoliran2 AS isolated_microorg_2,
                            rezultat.izoliran3 AS isolated_microorg_3,
                            rezultat.izoliran4 AS isolated_microorg_4,
                            rezultat.izoliran5 AS isolated_microorg_5,
                            rezultat.mikrobnochislo AS microbial_number,
                            rezultat.kolocenka AS quantification_1,
                            rezultat.KOLOCENKA_2 AS quantification_2,
                        	rezultat.KOLOCENKA_3 AS quantification_3,
                        	rezultat.KOLOCENKA_4 AS quantification_4,
                            rezultat.signifikantna AS significant,
                            rezultat.preparat AS microscopic_preparation,
                            rezultat.rezultat AS microbiology_result,
                            rezultat.preporaki AS recommendations,
                            rezultat.bakteriuria AS bacteriuria,
                            rezultat.sustoianie1 AS condition_1,
                        	rezultat.sustoianie2 AS condition_2,
                        	rezultat.sustoianie3 AS condition_3,
                            rezultat.sustoianie4 AS condition_4,
                        	rezultat.sustoianie5 AS condition_5,
                            rezultat.I AS I,
                            rezultat.II AS II,
                            rezultat.III AS III,
                            rezultat.IIIA AS IIIA,
                            rezultat.IIIB AS IIIB,
                            rezultat.IV AS IV,
                            rezultat.V AS V,
                            rezultat.C_I AS C_I,
                            rezultat.C_II AS C_II,
                            rezultat.C_IIIA AS C_IIIA,
                            rezultat.C_IIIB AS C_IIIB,
                            rezultat.C_IV AS C_IV,
                            rezultat.C_V AS C_V,
                            rezultat.zadovolitelna AS satisfactory,
                            rezultat.zadovolitelnano AS satisfactory_no,
                            rezultat.nezadovol AS unsatisfactory,
                            rezultat.kruv AS blood,
                            rezultat.mikroorganizmi AS microorganisms,
                            rezultat.levkociti AS leukocytes,
                            rezultat.loshafiksacia AS bad_fixation,
                            rezultat.lipsanaploski AS lack_of_flat_cells,
                            rezultat.lipsanaendocervikalni AS lack_of_endocervical_elements,
                            rezultat.cilindrichni AS cylindrical_cells,
                            rezultat.metaplastichni AS metaplastic_cells,
                            rezultat.kletkivnorma AS cell_rate,
                            rezultat.klpromeni AS cellular_changes,
                            rezultat.trihomoni AS trihomoni,
                            rezultat.kandida AS candida,
                            rezultat.cluecels AS clue_cells,
                            rezultat.koki AS cocci,
                            rezultat.bakterii AS bacteria,
                            rezultat.hsv AS hsv,
                            rezultat.cmv AS cmv,
                            rezultat.atrofia AS atrophy,
                            rezultat.radiacua AS radiation,
                            rezultat.matochnipesari AS uterine_pessary,
                            rezultat.drugi AS other,
                            rezultat.izoliran1 AS isolated_1,
                            rezultat.atipichni AS atypical_of_unknown_extend,
                            rezultat.atipichni_II AS atypical_of_unknown_extend_II,
                            rezultat.niskostepenni AS low_level_s_i_l,
                            rezultat.shpv AS hpv_included,
                            rezultat.bezhpv AS hpv_excluded,
                            rezultat.visokostepenni AS high_level_s_i_l,
                            rezultat.ploskokletachen AS s_i_l,
                            rezultat.endometrialni AS endometrial_for_female_in_meno,
                            rezultat.adenokarcinom AS adenocarcinoma,
                            rezultat.endocervikalen AS endocervical,
                            rezultat.endometrialen AS endometrial,
                            rezultat.izvunmatochen AS extrauterine,
                            rezultat.sneiasenproizhod AS with_unknown_origin,
                            rezultat.drugitumori AS other_uterine_tumors,
                            rezultat.koloskopia AS coloscopy,
                            rezultat.biopsia AS biopsy,
                            rezultat.cervikalnoabrazio AS cervical_abrasion,
                            rezultat.separiranoabrazio AS separated_abrasion,
                            rezultat.cito_lok_estr AS test_with_local_estrogen,
                            rezultat.cito_hpv AS test_hpv,
                            rezultat.sled1m AS after_1_month,
                            rezultat.sled3m AS after_3_months,
                            rezultat.sled6m AS after_6_months,
                            rezultat.sled12m AS after_12_months,
                            rezultat.drugsrok AS other_term,
                            rezultat.rezultat_blob AS result_blob,

                            napravlenie.plateno AS payment_status,
                            rezultat.fidtehnol_gr AS result_technological_group_id,
                            tehnol_gr.ime AS result_technological_group_name,
                            tehnol_gr.tip_rezultat AS result_type
                        FROM rezultat, napravlenie, tehnol_gr
                        WHERE napravlenie.idepruvetka = :idExaminationSample
                            AND (napravlenie.iztrito = 0)
                            AND (napravlenie.id = rezultat.fidnapr)
                            AND (rezultat.fidtehnol_gr = tehnol_gr.id)
                        ORDER BY rezultat.fidtehnol_gr, rezultat.kod';

        $examinationResultsRaw = DB::connection('firebird')
            ->select($queryString, ['idExaminationSample' => $idExaminationSample]);

        $examinationResultsConverted = [];

        foreach ($examinationResultsRaw as $examinationResultObject) {
            $examinationResult = (array)$examinationResultObject;
            //$examinationResult['cytology_result'] = false;
            $examinationResultsConverted[] = $this->convertSingleArrayEncodingWIN1251ToUTF8((array)$examinationResult);
        }

        // foreach ($cytology as $cytologyField) {
        //     foreach ($examinationResultsConverted as $examination) {
        //         if ($examination[$cytologyField['as']] == 1) {
        //             $examination['cytology_result'] = true;
        //             break;
        //         }
        //     }
        // }

        //dd($examinationResultsConverted);

        $examinationResults = $this->loadResultsByType($examinationResultsConverted, $locale, $patientGender, $laboratoryData);

        //dd($examinationResults);
        return $examinationResults;
    }

    /**
     * Load examination results by their type
     *
     * @return array
     */
    public function loadResultsByType($resultsArray, $locale, $patientGender, $laboratoryData)
    {
        $results = [
            'type1' => [],
            'type2' => [],
            'type3' => [],
            'type4' => [],
            'type5' => [],
            'type6' => [],
            'type7' => [],
            'type8' => [],
        ];

        foreach ($resultsArray as $result) {

            if (($result['RESULT_TYPE'] == config('lab-results.result_types.clinical_laboratory')) &&
                ($result['CODE'] != 'MI') &&
                ($result['CODE'] != 'NO') &&
                (strpos($result['CODE'], 'NO_') === false)) {

                $this->lowHighStatusLegend = true;
                // Load clinical laboratory result
                $results['type1'][] = $this->loadClinicalLaboratoryResult($result, $locale, $patientGender, $laboratoryData);

            } else if (($result['RESULT_TYPE'] == config('lab-results.result_types.microbiology')) &&
                        ($result['CODE'] == 'MI')) {

                // Load microbiology result
                $results['type2'][] = $this->loadMicrobiologyResult($result, $locale, $patientGender, $laboratoryData);

            } else if ($result['RESULT_TYPE'] == config('lab-results.result_types.cytology')) {

                // Load cytology result
                $results['type3'][] = $this->loadCytologyResult($result, $locale, $patientGender, $laboratoryData);

            } else if ($result['RESULT_TYPE'] == config('lab-results.result_types.pathology')) {

                dd('pathology');
                // Load pathology result
                $results['type4'][] = $this->loadPathologyResult($result, $locale, $patientGender, $laboratoryData);

            } else if ($result['RESULT_TYPE'] == config('lab-results.result_types.roentgen')) {

                // Load roentgen result
                $results['type5'][] = $this->loadRoentgenResult($result, $locale, $laboratoryData);

            } else if ($result['RESULT_TYPE'] == config('lab-results.result_types.parasitology')) {

                dd('parasitology');
                // Load parasitology result
                $results['type5'][] = $this->loadParasitologyResult($result, $locale, $patientGender, $laboratoryData);

            } else if ($result['RESULT_TYPE'] == config('lab-results.result_types.sdi')) {

                dd('sdi');
                // Load SDI result
                $results['type6'][] = $this->loadSDIResult($result, $locale, $patientGender, $laboratoryData);

            } else if ($result['RESULT_TYPE'] == config('lab-results.result_types.pcr')) {

                dd('pcr');
                // Load PCR result
                $results['type7'][] = $this->loadPCRResult($result, $locale, $patientGender, $laboratoryData);

            } else if ($result['RESULT_TYPE'] == config('lab-results.result_types.spermogram')) {

                dd('spermogram');
                // Load spermogram result
                $results['type8'][] = $this->loadSpermogramResult($result, $locale, $patientGender, $laboratoryData);

            } else if (($result['RESULT_TYPE'] == config('lab-results.test_types.t_cell')) &&
                        ($result['RESULT_TYPE'] != config('lab-results.result_types.sdi')) &&
                        ($result['RESULT_TYPE'] != config('lab-results.result_types.pcr')) &&
                        ($result['RESULT_TYPE'] != config('lab-results.result_types.spermogram'))) {

                dd('tcell');
                // Load TCell result
                $results[''] = $this->loadTCellResult($result, $locale, $patientGender, $laboratoryData);

            } else if (($result['RESULT_TYPE'] == config('lab-results.test_types.pla')) &&
                        ($result['RESULT_TYPE'] != config('lab-results.result_types.sdi')) &&
                        ($result['RESULT_TYPE'] != config('lab-results.result_types.pcr')) &&
                        ($result['RESULT_TYPE'] != config('lab-results.result_types.spermogram'))) {

                dd('pla');
                // Load PLA result
                $results[] = $this->loadPLAResult($result, $locale, $patientGender, $laboratoryData);
            }
        }

        return $results;
    }

    public function getResponsibleStaff($idExaminationSample, $locale)
    {
        $queryString = 'SELECT
                        	personal.ime AS person_first_name,
                        	personal.familia AS person_last_name
                        FROM napravlenie, personal
                        WHERE (napravlenie.idepruvetka = :idExaminationSample)
                           AND (napravlenie.fidpers = personal.id)
                        GROUP BY napravlenie.fidpers, personal.ime, personal.familia';

        $responsibleStaffRaw = DB::connection('firebird')
            ->select($queryString, ['idExaminationSample' => $idExaminationSample]);

        if (!empty($responsibleStaffRaw)) {

            $responsibleStaff = [];

            foreach ($responsibleStaffRaw as $person) {
                $responsibleStaff[] = $this->preparePersonResponsibleData((array)$person, $locale);
            }

            return $responsibleStaff;
        }

        return false;
    }

    public function preparePersonResponsibleData($personResponsibleRaw, $locale)
    {
        $title = '';

        if (config('lab-results.person_responsible.has_title')) {
            switch ($locale) {
                case 'bg':
                    $title = config('lab-results.person_responsible.bg.title');
                    break;

                case 'en':
                    $title = config('lab-results.person_responsible.en.title');
                    break;
            }
        }

        // Convert array encoding from Windows-1251 to UTF-8
        $personResponsibleConverted = $this->convertSingleArrayEncodingWIN1251ToUTF8($personResponsibleRaw);

        $personResponsible = [
            'title' => $title,
            'first_name' => $this->localize($personResponsibleConverted['PERSON_FIRST_NAME'], $locale),
            'last_name' => $this->localize($personResponsibleConverted['PERSON_LAST_NAME'], $locale),
        ];

        return $personResponsible;
    }

}
