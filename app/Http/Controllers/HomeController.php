<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $profiledata = Profile::find(1);
        return view('welcome', compact('profiledata'));
    }
}
