<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardAccountController extends Controller
{
    function index(){
        return view('pages.dashboard-account');
    }
}
