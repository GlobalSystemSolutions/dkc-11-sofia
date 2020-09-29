<?php

namespace App\Http\Controllers\Center\Laboratory\Results;

use App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Traits\Utilities\FlashMessageTrait;
use App\Traits\Utilities\LocalizationTrait;
use App\Traits\Utilities\EncodingConversionTrait;
use App\Traits\Utilities\RtfToHtmlConversionTrait;
use App\Traits\Center\Laboratory\Results\ResultsTrait;
use App\Traits\Center\Laboratory\Results\CytologyTrait;
use App\Traits\Center\Laboratory\Results\RoentgenTrait;
use App\Traits\Center\Laboratory\Results\PathologyTrait;
use App\Traits\Center\Laboratory\Results\MicrobiologyTrait;
use App\Traits\Center\Laboratory\Patient\PatientResultsTrait;
use App\Http\Requests\Center\Laboratory\PatientResultsRequest;
use App\Traits\Center\Laboratory\Results\ClinicalLaboratoryTrait;

class PatientController extends Controller
{
    use ClinicalLaboratoryTrait,
        CytologyTrait,
        EncodingConversionTrait,
        FlashMessageTrait,
        LocalizationTrait,
        MicrobiologyTrait,
        PathologyTrait,
        PatientResultsTrait,
        ResultsTrait,
        RoentgenTrait,
        RtfToHtmlConversionTrait;

    protected $lowHighStatusLegend = false;

    public function showPatientResults(PatientResultsRequest $request)
    {
        $idExaminationSample = (int)$request->idExaminationSample;
        $password = $request->examinationPassword;
        $locale = App::getLocale();

        $results = $this->checkForLaboratoryResults($idExaminationSample, $password);

        if (!$results) {
            $this->setLoginErrorFlashMessage('patient', $locale);
            return redirect()->back()->withInput();
        }

        $laboratoryData = $this->getLaboratoryData();
        $generalExaminationData = $this->getGeneralExaminationData($idExaminationSample, $locale);
        $examinationResults = $this->getExaminationResults(
            $idExaminationSample,
            $locale,
            $generalExaminationData['patient_gender'],
            $laboratoryData
        );

        $responsibleStaff = $this->getResponsibleStaff($idExaminationSample, $locale);

        return view('center.laboratory.results.results', [
            'laboratory_data' => $laboratoryData,
            'general_examination_data' => $generalExaminationData,
            'examination_results' => $examinationResults,
            'responsible_staff' => $responsibleStaff,
            'current_technological_group_id' => 0,
        ]);

    }
}
