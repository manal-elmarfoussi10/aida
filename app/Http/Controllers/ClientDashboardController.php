<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientDashboardController extends Controller
{
    public function index()
    {
        // Pass data to the dashboard if needed
        return view('client.dashboard');
    }
}
