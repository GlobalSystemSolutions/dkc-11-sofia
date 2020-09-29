<?php

namespace App\Http\Controllers\Center\Laboratory;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LaboratoryController extends Controller
{
    public function index()
    {
        return view('center.laboratory.clinical-laboratory');
    }

    public function showPatientsLogin()
    {
        return view('center.laboratory.patients.login');
    }

    public function showDoctorsLogin()
    {
        return view('center.laboratory.doctors.login');
    }
}
