<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\HomeDoctor;



class DashboardController extends Controller
{
    public function index()
    {

        $userCount = User::all()->count();
        $doctorCount = HomeDoctor::all()->count();
        return view('admin.dashboard', compact('userCount', 'doctorCount'));
    }
}
