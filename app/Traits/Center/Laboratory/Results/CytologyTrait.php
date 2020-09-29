<?php

namespace App\Traits\Center\Laboratory\Results;

use DB;

trait CytologyTrait {

    public function loadCytologyResult($resultRaw, $localization, $patientGender, $laboratorySettings)
    {
        $result = [
            'result_id' => $resultRaw['ID'],
            'result_type_id' => $resultRaw['RESULT_TYPE'],
            'result_blank' => config('lab-results.blank_types.cytology'),
            'result_blank_type_id' => config('lab-results.result_types.cytology'),
            'result_technological_group_id' => $resultRaw['RESULT_TECHNOLOGICAL_GROUP_ID'],
            'result_technological_group_name' => $resultRaw['RESULT_TECHNOLOGICAL_GROUP_NAME'],
            'result_code' => $resultRaw['CODE'],
            'result_name' => ($localization == 'bg') ? $resultRaw['NAME'] : $resultRaw['NAME_EN'],
            'result_value' => $resultRaw['RESULT_VALUE'],
            'result_completed' => $resultRaw['COMPLETED'],

            'result_I' => $resultRaw['I'],
            'result_II' => $resultRaw['II'],
            'result_III' => $resultRaw['III'],
            'result_IIIA' => $resultRaw['IIIA'],
            'result_IIIB' => $resultRaw['IIIB'],
            'result_IV' => $resultRaw['IV'],
            'result_V' => $resultRaw['V'],
            'result_C_I' => $resultRaw['C_I'],
            'result_C_II' => $resultRaw['C_II'],
            'result_C_IIIA' => $resultRaw['C_IIIA'],
            'result_C_IIIB' => $resultRaw['C_IIIB'],
            'result_C_IV' => $resultRaw['C_IV'],
            'result_C_V' => $resultRaw['C_V'],

            'result_satisfactory' => $resultRaw['SATISFACTORY'],
            'result_satisfactory_no' => $resultRaw['SATISFACTORY_NO'],
            'result_unsatisfactory' => $resultRaw['UNSATISFACTORY'],
            'result_blood' => $resultRaw['BLOOD'],
            'result_microorganisms' => $resultRaw['MICROORGANISMS'],
            'result_leukocytes' => $resultRaw['LEUKOCYTES'],
            'result_bad_fixation' => $resultRaw['BAD_FIXATION'],
            'result_lack_of_flat_cells' => $resultRaw['LACK_OF_FLAT_CELLS'],
            'result_lack_of_endocervical_elements' => $resultRaw['LACK_OF_ENDOCERVICAL_ELEMENTS'],
            'result_cylindrical_cells' => $resultRaw['CYLINDRICAL_CELLS'],
            'result_metaplastic_cells' => $resultRaw['METAPLASTIC_CELLS'],
            'result_cell_rate' => $resultRaw['CELL_RATE'],
            'result_cellular_changes' => $resultRaw['CELLULAR_CHANGES'],
            'result_trihomoni' => $resultRaw['TRIHOMONI'],
            'result_candida' => $resultRaw['CANDIDA'],
            'result_clue_cells' => $resultRaw['CLUE_CELLS'],
            'result_cocci' => $resultRaw['COCCI'],
            'result_bacteria' => $resultRaw['BACTERIA'],
            'result_hsv' => $resultRaw['HSV'],
            'result_cmv' => $resultRaw['CMV'],
            'result_atrophy' => $resultRaw['ATROPHY'],
            'result_radiation' => $resultRaw['RADIATION'],
            'result_uterine_pessary' => $resultRaw['UTERINE_PESSARY'],
            'result_other' => $resultRaw['OTHER'],
            'result_isolated_1' => $resultRaw['ISOLATED_1'],
            'result_atypical_of_unknown_extend' => $resultRaw['ATYPICAL_OF_UNKNOWN_EXTEND'],
            'result_atypical_of_unknown_extend_II' => $resultRaw['ATYPICAL_OF_UNKNOWN_EXTEND_II'],
            'result_low_grade_sil' => $resultRaw['LOW_LEVEL_S_I_L'],
            'result_hpv_included' => $resultRaw['HPV_INCLUDED'],
            'result_hpv_excluded' => $resultRaw['HPV_EXCLUDED'],
            'result_high_grade_sil' => $resultRaw['HIGH_LEVEL_S_I_L'],
            'result_squamous_cell_carcinoma' => $resultRaw['S_I_L'],
            'result_endometrial_for_female_in_meno' => $resultRaw['ENDOMETRIAL_FOR_FEMALE_IN_MENO'],
            'result_adenocarcinoma' => $resultRaw['ADENOCARCINOMA'],
            'result_endocervical' => $resultRaw['ENDOCERVICAL'],
            'result_endometrial' => $resultRaw['ENDOMETRIAL'],
            'result_extrauterine' => $resultRaw['EXTRAUTERINE'],
            'result_with_unknown_origin' => $resultRaw['WITH_UNKNOWN_ORIGIN'],
            'result_other_uterine_tumors' => $resultRaw['OTHER_UTERINE_TUMORS'],
            'result_coloscopy' => $resultRaw['COLOSCOPY'],
            'result_biopsy' => $resultRaw['BIOPSY'],
            'result_cervical_abrasion' => $resultRaw['CERVICAL_ABRASION'],
            'result_separated_abrasion' => $resultRaw['SEPARATED_ABRASION'],
            'result_test_with_local_estrogen' => $resultRaw['TEST_WITH_LOCAL_ESTROGEN'],
            'result_test_hpv' => $resultRaw['TEST_HPV'],
            'result_after_1_month' => $resultRaw['AFTER_1_MONTH'],
            'result_after_3_months' => $resultRaw['AFTER_3_MONTHS'],
            'result_after_6_months' => $resultRaw['AFTER_6_MONTHS'],
            'result_after_12_months' => $resultRaw['AFTER_12_MONTHS'],
            'result_other_term' => $resultRaw['OTHER_TERM'],
            'result_additional_descriprion' => $resultRaw['RESULT_VALUE'],
        ];

        return $result;
    }
}
