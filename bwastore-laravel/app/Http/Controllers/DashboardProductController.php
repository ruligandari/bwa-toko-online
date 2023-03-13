<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardProductController extends Controller
{
    function index()
    {
        return view('pages.dashboard-product');
    }
    function detail()
    {
        return view('pages.dashboard-product-detail');
    }
}
