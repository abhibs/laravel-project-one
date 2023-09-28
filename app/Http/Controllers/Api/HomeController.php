<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Client;
use App\Models\Faq;
use App\Models\Profile;
use App\Models\Service;
use App\Models\Team;


class HomeController extends Controller
{
    public function index()
    {
        $profiledata = Profile::find(1);
        $clients = Client::where('status', 1)->take(6)->latest()->get();
        $aboutdata = About::find(1);
        $services = Service::where('status', 1)->take(4)->latest()->get();
        $AllProject = Portfolio::where('status', 1)->inRandomOrder()->get();
        $categories = Category::latest()->get();
        $catWiseProject = [];

        foreach ($categories as $category) {
            $catWiseProjectCategoryId = Portfolio::where('status', 1)
                ->where('category_id', $category->id)
                ->inRandomOrder()
                ->get();

            $catWiseProject[$category->name] = $catWiseProjectCategoryId;
            foreach ($catWiseProjectCategoryId as $data) {
                $data->image = asset($data->image);
            }
        }

        $teamdatas = Team::with('socialmedia')->where('status', 1)->get();
        $faqdatas = Faq::where('status', 1)->latest()->get();



        $profiledata->image = asset($profiledata->image);
        foreach ($clients as $data) {
            $data->image = asset($data->image);
        }

        foreach ($AllProject as $data) {
            $data->image = asset($data->image);
        }

        foreach ($teamdatas as $data) {
            $data->image = asset($data->image);
        }


        return response([
            'message' => 'Home Page API',
            'status' => 'success',
            'Profile' => $profiledata,
            'Client' => $clients,
            'About' => $aboutdata,
            'Service' => $services,
            'AllProject' => $AllProject,
            'catWiseProject' => $catWiseProject,
            'teamdatas' => $teamdatas,
            'faqdatas' => $faqdatas,
            'code' => 200
        ], 200);
    }

    public function contactUs(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',

        ]);

        $contact = new Contact;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;


        $contact->save();

        return response([
            'message' => 'Contact Form Submited Successfully',
            'status' => 'success',
            'contact' => $contact,
            'code' => 200
        ], 200);
    }
}
