<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Client;
use App\Models\Profile;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $profiledata = Profile::find(1);
        $clients = Client::where('status', 1)->take(6)->latest()->get();
        $aboutdata = About::find(1);

        return view('welcome', compact('profiledata', 'clients', 'aboutdata'));
    }
}
