<?php

namespace App\Traits\Utilities;

use DB;
use App;
use Carbon\Carbon;
use App\Http\Requests\Center\Laboratory\SearchListRequest;
use App\Http\Requests\Center\Laboratory\DoctorPatientsListRequest;

trait ValidationTrait {

    /**
     * Validates Doctor record patients list request
     *
     * @return array
     */
    protected function validateDoctorData(DoctorPatientsListRequest $request)
    {
        $currentDateTime = Carbon::now();

        if (empty($request->date_from)) {
            $startOfMonth = $currentDateTime->startOfMonth()->toDateString();
            $request->merge([
                'date_from' => $startOfMonth,
            ]);
        }

        if (empty($request->date_to)) {
            $endOfMonth = $currentDateTime->endOfMonth()->toDateString();
            $request->merge([
                'date_to' => $endOfMonth,
            ]);
        }

        // if (empty($request->localization)) {
        //     $request->merge([
        //         'localization' => 'bg',
        //     ]);
        // }

        // App::setLocale($request->localization);

        $this->validate($request, [
            'doctor_uin' => 'required|digits_between:1,10',
            'doctor_password' => 'required|digits_between:1,20',
            'date_from' => 'nullable|date_format:"Y-m-d"',
            'date_to' => 'nullable|date_format:"Y-m-d"',
            'patient_egn' => 'nullable|min:10|max:10',
            'patient_last_name' => 'nullable|max:60',
            'cipher' => 'nullable|max:20',
            //'localization' => 'required|string',
        ]);
    }

    /**
     * Validates Doctor record patients list request
     *
     * @return array
     */
    protected function validateDoctorSearchData(SearchListRequest $request)
    {
        $currentDateTime = Carbon::now();

        if (empty($request->date_from)) {
            $startOfMonth = $currentDateTime->startOfMonth()->toDateString();
            $request->merge([
                'date_from' => $startOfMonth,
            ]);
        }

        if (empty($request->date_to)) {
            $endOfMonth = $currentDateTime->endOfMonth()->toDateString();
            $request->merge([
                'date_to' => $endOfMonth,
            ]);
        }

        // if (empty($request->localization)) {
        //     $request->merge([
        //         'localization' => 'bg',
        //     ]);
        // }

        // App::setLocale($request->localization);

        $this->validate($request, [
            'doctor_uin' => 'required|digits_between:1,10',
            'doctor_password' => 'required|digits_between:1,20',
            'date_from' => 'nullable|date_format:"d.m.Y"',
            'date_to' => 'nullable|date_format:"d.m.Y"',
            'patient_egn' => 'nullable|digits_between:1,10',
            'patient_last_name' => 'nullable|max:60',
            'cipher' => 'nullable|max:20',
            //'localization' => 'required|string',
        ]);
    }

}
