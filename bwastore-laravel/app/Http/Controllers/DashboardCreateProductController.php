<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardCreateProductController extends Controller
{
    function index()
    {
        return view('pages.dashboard-create-product');
    }
}
