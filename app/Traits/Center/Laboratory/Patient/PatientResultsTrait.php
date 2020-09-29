<?php

namespace App\Traits\Center\Laboratory\Patient;

use DB;

trait PatientResultsTrait {

    /**
     * Check for laboratory results
     *
     * @return boolean
     */
    public function checkForLaboratoryResults($idExaminationSample, $password)
    {
        // Long passwords
        // $queryString = 'SELECT COUNT(napravlenie.id)
        //                     FROM napravlenie
        //                     WHERE napravlenie.idepruvetka = :idExaminationSample
        //                         AND napravlenie.webresultspass = :password';

        // Old passwords
        $queryString = 'SELECT COUNT(napravlenie.id)
                            FROM napravlenie
                            WHERE napravlenie.idepruvetka = :idExaminationSample
                            AND napravlenie.fidpac = :password';

        $resultsCount = DB::connection('firebird')
            ->select($queryString, [
                'idExaminationSample' => $idExaminationSample,
                'password' => $password,
            ]);

        $countArray = (array)$resultsCount[0];

        if ($countArray['COUNT'] != 0) {
            return true;
        }

        return false;
    }
}
