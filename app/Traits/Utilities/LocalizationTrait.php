<?php

namespace App\Traits\Utilities;

trait LocalizationTrait {

    public function localize($word, $locale)
    {
        $localizedWord = null;

        switch ($locale) {
            case 'bg':
                $localizedWord = $word;
                break;

            case 'en':
                $localizedWord = $this->cyrillicToLatin($word);
                break;
        }

        return $localizedWord;
    }


    public function cyrillicToLatin($word)
    {
        $wordLength = mb_strlen($word);
        $convertedWord = null;

        for ($i = 0; $i < $wordLength; $i++) {
            $character = mb_substr($word, $i, 1, 'utf-8');
            $convertedWord .= $this->charCyrillicToLatin($character);
        }

        //$convertedWord = strtoupper($convertedWord);
        //$convertedWord = ucfirst($convertedWord);

        return $convertedWord;
    }

    public function charCyrillicToLatin($char)
    {
        $alphabet = config('i18n.alphabet');
        $latinChar = null;

        for ($i = 0; $i < count($alphabet); $i++) {

            if (strcmp($char, $alphabet[$i][0]) === 0) {
                $latinChar = $alphabet[$i][2];
                break;
            } elseif (strcmp($char, $alphabet[$i][1]) === 0) {
                $latinChar = $alphabet[$i][3];
                break;
            }
        }

        return $latinChar;
    }

}
