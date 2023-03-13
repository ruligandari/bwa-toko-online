<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardSettingsController extends Controller
{
    function index(){
        return view('pages.dashboard-settings-store');
    }
}
