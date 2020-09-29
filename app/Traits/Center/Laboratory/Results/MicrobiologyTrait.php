<?php

namespace App\Traits\Center\Laboratory\Results;

use DB;

trait MicrobiologyTrait {

    public function loadMicrobiologyResult($resultRaw, $localization, $patientGender, $laboratorySettings)
    {
        // Load antibiogram
        $antibiogram = $this->loadAntibiogram($resultRaw['ID']);

        // Get antibiogram legend
        $antibiogramLegend = $this->getAntibiogramLegend($localization);

        $result = [
            'result_id' => $resultRaw['ID'],
            'result_type_id' => $resultRaw['RESULT_TYPE'],
            'result_blank' => config('lab-results.blank_types.microbiology'),
            'result_blank_type_id' => config('lab-results.result_types.microbiology'),
            'result_technological_group_id' => $resultRaw['RESULT_TECHNOLOGICAL_GROUP_ID'],
            'result_technological_group_name' => $resultRaw['RESULT_TECHNOLOGICAL_GROUP_NAME'],
            'result_code' => $resultRaw['CODE'],
            'result_name' => ($localization == 'bg') ? $resultRaw['NAME'] : $resultRaw['NAME_EN'],
            'result_microbilogy_result' => $resultRaw['MICROBIOLOGY_RESULT'],
            'result_completed' => $resultRaw['COMPLETED'],

            'result_material_type' => $resultRaw['MATERIAL_TYPE'],
            'result_date_of_collection' => $resultRaw['DATE_OF_COLLECTION'],
            'result_cultivation_of_microorganisms_1' => $resultRaw['CULTIVATION_OF_MICROORGANISMS_1'],
            'result_cultivation_of_microorganisms_2' => $resultRaw['CULTIVATION_OF_MICROORGANISMS_2'],
            'result_cultivation_of_microorganisms_3' => $resultRaw['CULTIVATION_OF_MICROORGANISMS_3'],
            'result_cultivation_of_microorganisms_4' => $resultRaw['CULTIVATION_OF_MICROORGANISMS_4'],
            'result_cultivation_of_microorganisms_5' => $resultRaw['CULTIVATION_OF_MICROORGANISMS_5'],

            'result_isolated_microorganisms_1' => $resultRaw['ISOLATED_MICROORG_1'],
            'result_isolated_microorganisms_2' => $resultRaw['ISOLATED_MICROORG_2'],
            'result_isolated_microorganisms_3' => $resultRaw['ISOLATED_MICROORG_3'],
            'result_isolated_microorganisms_4' => $resultRaw['ISOLATED_MICROORG_4'],
            'result_isolated_microorganisms_5' => $resultRaw['ISOLATED_MICROORG_5'],

            'result_microbial_number' => $resultRaw['MICROBIAL_NUMBER'],
            'result_quantification_1' => $resultRaw['QUANTIFICATION_1'],
            'result_quantification_2' => $resultRaw['QUANTIFICATION_2'],
            'result_quantification_3' => $resultRaw['QUANTIFICATION_3'],
            'result_quantification_4' => $resultRaw['QUANTIFICATION_4'],

            'result_significant' => $resultRaw['SIGNIFICANT'],
            'result_microscopic_preparation' => $resultRaw['MICROSCOPIC_PREPARATION'],
            'result_recommendations' => $resultRaw['RECOMMENDATIONS'],
            'result_bacteriuria' => $resultRaw['BACTERIURIA'],
            'result_condition_1' => $resultRaw['CONDITION_1'],
            'result_condition_2' => $resultRaw['CONDITION_2'],
            'result_condition_3' => $resultRaw['CONDITION_3'],
            'result_condition_4' => $resultRaw['CONDITION_4'],
            'result_condition_5' => $resultRaw['CONDITION_5'],
            'result_antibiogram' => $antibiogram,
            'result_antibiogram_legend' => $antibiogramLegend,
        ];

        return $result;
    }

    public function loadAntibiogram($resultId)
    {
        $queryString = 'SELECT
                        	antibiotik.ime AS antibiotic_name,
                            antibiotik.interpretacia AS antibiotic_interpretation_1,
                            antibiotik.interpretacia2 AS antibiotic_interpretation_2,
                            antibiotik.interpretacia3 AS antibiotic_interpretation_3,
                            antibiotik.interpretacia4 AS antibiotic_interpretation_4,
                            antibiotik.interpretacia5 AS antibiotic_interpretation_5,
                            antibiotik.interpretacia6 AS antibiotic_interpretation_6,
                            antibiotik.kod_sort AS antibiotic_sort_code
                        FROM antibiotik
                        WHERE antibiotik.fidrezultat = :idResult
                        ORDER BY antibiotik.kod_sort, antibiotik.ime';

        $antibiogramRaw = DB::connection('firebird')
            ->select($queryString, ['idResult' => $resultId]);

        $antibiogram = [];

        foreach ($antibiogramRaw as $antibiogramResult) {
            $antibiogramConverted = $this->convertSingleArrayEncodingWIN1251ToUTF8((array)$antibiogramResult);
            $antibiogram[] = $this->prepareAntibiogramData($antibiogramConverted);
        }

        return $antibiogram;
    }

    public function prepareAntibiogramData($antibiogramResult)
    {
        $antibiogram = [
            'antibiotic_name' => $antibiogramResult['ANTIBIOTIC_NAME'],
            'antibiotic_interpretation_1' => $antibiogramResult['ANTIBIOTIC_INTERPRETATION_1'],
            'antibiotic_interpretation_2' => $antibiogramResult['ANTIBIOTIC_INTERPRETATION_2'],
            'antibiotic_interpretation_3' => $antibiogramResult['ANTIBIOTIC_INTERPRETATION_3'],
            'antibiotic_interpretation_4' => $antibiogramResult['ANTIBIOTIC_INTERPRETATION_4'],
            'antibiotic_interpretation_5' => $antibiogramResult['ANTIBIOTIC_INTERPRETATION_5'],
            'antibiotic_interpretation_6' => $antibiogramResult['ANTIBIOTIC_INTERPRETATION_6'],
            'antibiotic_sort_code' => $antibiogramResult['ANTIBIOTIC_SORT_CODE'],
        ];

        return $antibiogram;
    }

    public function getAntibiogramLegend($localization)
    {
        $antibiogramLegend;

        switch ($localization) {
            case 'bg':
                $antibiogramLegend = [
                    'sensitive' => config('lab-results.antibiogram_legend.bg.sensitive'),
                    'intermediate' => config('lab-results.antibiogram_legend.bg.intermediate'),
                    'resistant' => config('lab-results.antibiogram_legend.bg.resistant'),
                ];
                break;

            case 'en':
                $antibiogramLegend = [
                    'sensitive' => config('lab-results.antibiogram_legend.en.sensitive'),
                    'intermediate' => config('lab-results.antibiogram_legend.en.intermediate'),
                    'resistant' => config('lab-results.antibiogram_legend.en.resistant'),
                ];
                break;
        }

        return $antibiogramLegend;
    }
}
