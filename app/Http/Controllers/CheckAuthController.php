<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class CheckAuthController extends Controller
{
	use AuthenticatesUsers;

     public function index()
    {
        $roles = auth()->user()->getRoleNames();

        // Check user role
        switch ($roles[0]) {
            case 'Student':
                    return view('studentbackend.backend');
                break;
            case 'Admin':
                    return view('home');
                break; 
            default:
                    return '/';  
                break;
        }
    }}
