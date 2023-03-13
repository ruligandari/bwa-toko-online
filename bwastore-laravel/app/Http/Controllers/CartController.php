<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    function index()
    {
        return view('pages/cart');
    }
    function success()
    {
        return view('pages/success');
    }
    
}
