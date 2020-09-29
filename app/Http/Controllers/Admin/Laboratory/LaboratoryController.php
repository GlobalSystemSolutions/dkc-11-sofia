<?php

namespace App\Http\Controllers\Admin\Laboratory;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LaboratoryController extends Controller
{
    public function index()
    {
        return view('admin.laboratories.index');
    }
}
