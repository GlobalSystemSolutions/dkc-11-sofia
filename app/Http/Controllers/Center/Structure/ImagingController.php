<?php

namespace App\Http\Controllers\Center\Structure;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ImagingController extends Controller
{
    public function index()
    {
        return view('center.structure.imaging');
    }
}
