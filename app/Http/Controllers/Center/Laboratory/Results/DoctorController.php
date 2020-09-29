<?php

namespace App\Http\Controllers\Center\Laboratory\Results;

use App;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Traits\Utilities\ValidationTrait;
use App\Traits\Utilities\FlashMessageTrait;
use App\Traits\Utilities\LocalizationTrait;
use App\Traits\Utilities\EncodingConversionTrait;
use App\Http\Requests\Center\Laboratory\SearchListRequest;
use App\Traits\Center\Laboratory\Doctor\DoctorRecordTrait;
use App\Http\Requests\Center\Laboratory\DoctorPatientsListRequest;

class DoctorController extends Controller
{
    use EncodingConversionTrait,
        DoctorRecordTrait,
        FlashMessageTrait,
        LocalizationTrait,
        ValidationTrait;

    public function showPatientsList(DoctorPatientsListRequest $request)
    {
        $this->validateDoctorData($request);
        $locale = App::getLocale();

        $requestData = [
            'doctorUIN' => $request->doctor_uin,
            'doctorPassword' => $request->doctor_password,
            'dateFrom' => $request->date_from,
            'dateTo' => $request->date_to,
            'patientEgn' => $request->patient_egn,
            'patientLastName' => $request->patient_last_name,
            'cipher' => $request->cipher,
            'localization' => $locale,
        ];

        $requestData['dateFrom'] = Carbon::parse($requestData['dateFrom'])->format('Y-m-d');
        $requestData['dateTo'] = Carbon::parse($requestData['dateTo'])->format('Y-m-d');

        // Check for doctor record
        $doctorRecord = $this->checkForDoctorRecord($requestData);

        if (!$doctorRecord) {
            $this->setLoginErrorFlashMessage('doctor', $locale);
            return redirect()->back()->withInput();
        }

        $referralsList = $this->loadDoctorReferrals($requestData, $doctorRecord);

        $requestData['dateFrom'] = Carbon::parse($requestData['dateFrom'])->format('d.m.Y');
        $requestData['dateTo'] = Carbon::parse($requestData['dateTo'])->format('d.m.Y');

        return view('center.laboratory.doctors.patients-list', [
            'doctor_record' => $doctorRecord,
            'doctor_referrals' => $referralsList['doctor_referrals'],
            'request_data' => $requestData,
        ]);
    }

    public function searchPatientsList(SearchListRequest $request)
    {
        $this->validateDoctorSearchData($request);
        $locale = App::getLocale();

        $requestData = [
            'doctorUIN' => $request->doctor_uin,
            'doctorPassword' => $request->doctor_password,
            'dateFrom' => $request->date_from,
            'dateTo' => $request->date_to,
            'patientEgn' => $request->patient_egn,
            'patientLastName' => $request->patient_last_name,
            'cipher' => $request->cipher,
            'localization' => $locale,
        ];

        $requestData['dateFrom'] = Carbon::parse($requestData['dateFrom'])->format('Y-m-d');
        $requestData['dateTo'] = Carbon::parse($requestData['dateTo'])->format('Y-m-d');

        //dd($requestData);

        // Check for doctor record
        $doctorRecord = $this->checkForDoctorRecord($requestData);

        if (!$doctorRecord) {
            $this->setLoginErrorFlashMessage('doctor', $locale);
            return redirect()->back()->withInput();
        }

        $referralsList = $this->loadDoctorReferrals($requestData, $doctorRecord);

        $requestData['dateFrom'] = Carbon::parse($requestData['dateFrom'])->format('d.m.Y');
        $requestData['dateTo'] = Carbon::parse($requestData['dateTo'])->format('d.m.Y');

        return view('center.laboratory.doctors.patients-list', [
            'doctor_record' => $doctorRecord,
            'request_data' => $requestData,
            'doctor_referrals' => $referralsList['doctor_referrals'],
        ]);
    }
}
