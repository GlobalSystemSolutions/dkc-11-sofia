<?php

namespace App\Traits\Center\Laboratory\Results;

use DB;

trait RoentgenTrait {

    public function loadRoentgenResult($resultRaw, $localization, $laboratoryData)
    {
        $roentgen_result = null;
        switch ($laboratoryData['RENTGEN_REZ2']) {
            case 2:
            case 3:
            case 4:
                $roentgen_result = $this->convertRtfToHtml($resultRaw['RESULT_BLOB']);
                break;

            default:
                $roentgen_result = $resultRaw['RESULT_VALUE'];
                break;
        }

        $result = [
            'result_id' => $resultRaw['ID'],
            'result_type_id' => $resultRaw['RESULT_TYPE'],
            'result_blank' => config('lab-results.blank_types.roentgen'),
            'result_blank_type_id' => config('lab-results.result_types.roentgen'),
            'result_technological_group_id' => $resultRaw['RESULT_TECHNOLOGICAL_GROUP_ID'],
            'result_technological_group_name' => $resultRaw['RESULT_TECHNOLOGICAL_GROUP_NAME'],
            'result_code' => $resultRaw['CODE'],
            'result_name' => ($localization == 'bg') ? $resultRaw['NAME'] : $resultRaw['NAME_EN'],
            'result_value' => $roentgen_result,
            'result_completed' => $resultRaw['COMPLETED'],
            'result_image_path' => $this->getImageUrl($resultRaw['ID']),
        ];

        return $result;
    }

    protected function getImageUrl($resultId)
    {
        $queryString = 'SELECT
                            image_ro.path AS image_network_path
                        FROM image_ro
                        WHERE image_ro.fidrez = :result_id';

        $generalImageDataRaw = DB::connection('firebird')
        ->select($queryString, ['result_id' => $resultId]);

        return array_map(
            function ($image_network_path) {
                $path_parts = pathinfo($image_network_path->{'IMAGE_NETWORK_PATH'});
                return sprintf('/%s/%s', basename($path_parts['dirname']), $path_parts['basename']);
            },
            $generalImageDataRaw
        );
    }

}
