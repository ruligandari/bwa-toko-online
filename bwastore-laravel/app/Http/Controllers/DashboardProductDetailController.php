<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardProductDetailController extends Controller
{
   function index()
    {
        return view('pages.dashboard-product-detail');
    }
}
