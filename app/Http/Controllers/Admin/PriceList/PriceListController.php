<?php

namespace App\Http\Controllers\Admin\PriceList;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PriceListController extends Controller
{
    public function index()
    {
        return view('admin.prices.index');
    }
}
