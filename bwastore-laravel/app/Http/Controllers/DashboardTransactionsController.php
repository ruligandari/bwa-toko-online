<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardTransactionsController extends Controller
{
    function index()
    {
        return view('pages.dashboard-transaction');
    }
    function detail()
    {
        return view('pages.dashboard-transaction-detail');
    }
}