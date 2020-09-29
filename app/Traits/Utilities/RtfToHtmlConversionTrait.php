<?php

namespace App\Traits\Utilities;

use RtfReader;
use RtfHtml;

trait RtfToHtmlConversionTrait {

    public function convertRtfToHtml($rtfString)
    {
        $convertedString = null;

        if (!empty($rtfString)) {
            $reader = new RtfReader();
            $readerResult = $reader->Parse($rtfString);
            $formatter = new RtfHtml('UTF-8');
            $formatter->Format($reader->root);
            $convertedString = $formatter->output;
        }

        return $convertedString;
    }
}
