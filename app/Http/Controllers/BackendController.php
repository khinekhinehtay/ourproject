<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackendController extends Controller
{
    public function dashboardfun()
    {
    	return view('backend.dashboard');
    }
}
