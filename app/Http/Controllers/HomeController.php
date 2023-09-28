<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Client;
use App\Models\Contact;
use App\Models\Faq;
use App\Models\Profile;
use App\Models\Service;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

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

    public function contact(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ], [
            'name.required' => 'Name is Required',
            'email.required' => 'Email is Required',
            'subject.required' => 'Subject is Required',
            'message.required' => 'Message is Required',
        ]);
        Contact::insert([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
            'created_at' => Carbon::now(),
        ]);
        $notification = array(
            'message' => 'Contact Form Submitted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
}
