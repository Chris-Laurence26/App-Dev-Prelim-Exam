<?php

namespace App\Http\Controllers;

use App\Models\HomeOwner;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $owners = HomeOwner::latest()->get();
        return view('dashboard', compact('owners'));
    }
}
