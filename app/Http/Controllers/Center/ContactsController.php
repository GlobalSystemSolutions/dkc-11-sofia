<?php

namespace App\Http\Controllers\Center;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactsController extends Controller
{
    public function index()
    {
        return view('center.contacts');
    }
}
