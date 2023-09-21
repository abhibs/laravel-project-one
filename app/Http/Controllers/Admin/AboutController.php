<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $data = About::find(1);
        return view('admin.about.index', compact('data'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'content' => 'required',
        ], [
            'content.required' => 'About Us Content is Required',
        ]);
        $id = $request->id;

        About::findOrFail($id)->update([
            'content' => $request->content,
        ]);

        $notification = array(
            'message' => 'About Us Content Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }
}
