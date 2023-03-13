<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailController extends Controller
{
    function index()
    {
        return view('pages/detail');
    }
}
