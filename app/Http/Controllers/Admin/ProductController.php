<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;


class ProductController extends Controller
{
    public function create()
    {
        
        return view('admin.create');
    }


     public function edit($id)
    {
        $product = Product::find($id);
        return view('admin.edit', compact('product'));
    }
     public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->name = $request->input('name');
         $product->category = $request->input('category');
        $product->description = $request->input('description');
       if ($request->hasFile('product_image')) {
            // Delete old image if exists
            if ($product->product_image && file_exists(public_path('uploades/' . $product->product_image))) {
                unlink(public_path('uploads/' . $product->product_image));
            }

            // Upload new image
            
          
            $imageName = $request->product_image->getClientOriginalName();
            $request->product_image->move(public_path('uploads'), $imageName);
            $product->product_image = $imageName;
        }
        $product->date = $request->input('date');
        $product->time = $request->input('time');
        $product->update();
        return redirect('/dashboard')->with('status','Student Updated Successfully');
    }

    public function destroy($id)
    {
        $product = Product::find($id); // Find the post by its ID
        $product->delete(); // Delete the found post

        return redirect('/dashboard')->with('success', 'Post deleted successfully.');
    }

    public function store(Request $request)
    {


        $product = new Product;
        $product->name = $request->input('name');
        $product->category = $request->input('category');
        $product->description = $request->input('description'); 
       
          if ($request->hasfile('product_image')) {
    // Get the original filename from the request
    $imageName = $request->product_image->getClientOriginalName();

    // Move the file to the 'uploads' directory
    $request->product_image->move(public_path('uploads'), $imageName);

    // Save the filename to the product model
    $product->product_image = $imageName;
}
        $product->date = $request->input('date');
        $product->time = $request->input('time');
        
        $product->save();
        return redirect('/dashboard')->with('status','New Product Added Successfully');
    }


     public function index()
    {
        $product = Product::all();
        return view('admin.index', compact('product'));
    }


   
}
