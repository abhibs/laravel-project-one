<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Client;
use App\Models\Faq;
use App\Models\Profile;
use App\Models\Service;
use App\Models\Team;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $profiledata = Profile::find(1);
        $clients = Client::where('status', 1)->take(6)->latest()->get();
        $aboutdata = About::find(1);
        $services = Service::where('status', 1)->take(4)->latest()->get();
        $teamdatas = Team::where('status', 1)->get();
        $faqdatas = Faq::where('status', 1)->latest()->get();


        return view('welcome', compact('profiledata', 'clients', 'aboutdata', 'services', 'teamdatas', 'faqdatas'));
    }
}
