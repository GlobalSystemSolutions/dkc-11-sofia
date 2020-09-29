<?php

namespace App\Http\Controllers\Center;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutUsController extends Controller
{
    public function index()
    {
        return view('center.about-us');
    }
}
