<?php

namespace App\Traits\Utilities;

trait EncodingConversionTrait {

    /**
     * Convert encoding on array/object items from Windows-1251 to UTF-8
     *
     * @return array
     */
    protected function convertArrayEncodingWIN1251ToUTF8($array)
    {
        foreach ($array as $array_item) {
            foreach ($array_item as $key => &$value) {
                if (is_string($value)) {
                    //$value = mb_convert_encoding($value, 'utf-8', 'windows-1251');
                    $value = iconv('windows-1251', 'utf-8', $value);
                }
            }
        }

        return $array;
    }

    /**
     * Convert encoding on array/object items from Windows-1251 to UTF-8
     *
     * @return array
     */
    protected function convertSingleArrayEncodingWIN1251ToUTF8($array)
    {
        foreach ($array as $key => &$value) {
            if (is_string($value)) {
                //$value = mb_convert_encoding($value, 'utf-8', 'windows-1251');
                $value = iconv('windows-1251', 'utf-8', $value);
            }
        }

        return $array;
    }
}