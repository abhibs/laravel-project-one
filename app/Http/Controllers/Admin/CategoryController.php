<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function create()
    {
        return view('admin.category.create');
    }


    public function store(Request $request)
    {

        Category::insert([
            'name' => $request->name,
        ]);


        $notification = array(
            'message' => 'Category Inserted Successfully',
            'alert-type' => 'success'

        );

        return redirect()->route('category')->with($notification);


    }

    public function index()
    {

        $datas = Category::latest()->get();
        return view('admin.category.index', compact('datas'));

    }


    public function edit($id)
    {
        $data = Category::findOrFail($id);
        return view('admin.category.edit', compact('data'));
    }


    public function update(Request $request)
    {

        $cat_id = $request->id;

        Category::findOrFail($cat_id)->update([
            'name' => $request->name,

        ]);


        $notification = array(
            'message' => 'Category Updated Successfully',
            'alert-type' => 'success'

        );

        return redirect()->route('category')->with($notification);


    }


    public function delete($id)
    {

        Category::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Category Deleted Successfully',
            'alert-type' => 'success'

        );

        return redirect()->back()->with($notification);

    }
}