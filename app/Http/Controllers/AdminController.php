<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
// use Flasher\Toastr\Prime\Toastr;
use Flasher\Prime\FlasherInterface;
use SweetAlert;



class AdminController extends Controller
{
    public function view_category()
    {
        $data = Category::all(); 
        return view('admin.category', compact('data'));
    }

    public function add_category(Request $request)
    {
        $request->validate([
            'category' => 'required|string|max:255',
        ]);

        $category = new Category;
        $category->category_name = $request->category;
        $category->save();
        toastr()->success('Your Category has been added successfully.');
        return redirect()->back();
        // ------
        // if($category->save()){
        //     flash()->success('Category has been added successfully');
        //     return redirect()->back();
        // }
        
          //    return redirect()->back()->with('message', 'Category Added Successfully');
        // Toastr()->addsuccess('Category has been added successfully');
    }

    public function delete_category($id)
    {
        $data = Category::find($id);

        $data->delete();

        toastr()->success('Your Category has been deleted successfully.');
        return redirect()->back();
    }

    public function edit_category($id)
    {
        $data = Category::find($id);
       return view('admin.edit_category',compact('data'));
    }

    public function update_category(Request $request,$id)
    {
        $data = Category::find($id);
        $data->category_name = $request->category;
        $data->save();
        toastr()->success('Your Category has been Updated successfully.');
        return redirect('/view_category');
    }
}

    
  



   

