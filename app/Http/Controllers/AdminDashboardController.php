<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index()
    {
        return view('backend.master');
    }

public function viewDashboard(){
    return view('backend.dashboard.dashboard');
}
}