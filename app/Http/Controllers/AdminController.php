<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
// use Flasher\Toastr\Prime\Toastr;
use Flasher\Prime\FlasherInterface;

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
        toastr()->success('Your Category has been Updated SSuccessfully.');
        return redirect('/view_category');
    }
    
    public function add_product()
    {
        $category = Category::all();
        return view('admin.add_product',compact('category'));
    }
    public function upload_product(Request $request)
    {
       $data = new Product;

       $data->title = $request->title;
       $data->description = $request->description;
       $data->price = $request->price;
       $data->quantity = $request->qty;
       $data->category = $request->category;

       $image = $request->image;

       if($image)
       {
           $imagename = time().'.'.$image->getClientOriginalExtension();
           $request->image->move('products', $imagename);

           $data->image = $imagename;
       }


       $data->save();

       toastr()->success('Your Product has been Uploaded successfully');
       return redirect()->back();

    }
}

    
  



   

