<?php

namespace App\Http\Controllers\Restaurant\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductGallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProductGalleryController extends Controller

{
    public function index()
    {

    }

    public function create()
    {

    }
    public function store(Request $request)
    {
        $data= $request->validate([
            'photo' => 'required|image|mimes:jpg,png,jpeg,gif',
            'product_id' => 'required',
        ]);
        if($request->file('photo')) {
            $file = $request->file('photo');
            $image = date('photo') . $file->getClientOriginalName();
            $file->move(public_path('images/product_gallery/'), $image);
            $data['photo']  = $image;
        }
        ProductGallery::create($data);
        $product=$request->product_id;
        return redirect()->route('product_gallery.show', [ $product, 'product' => compact('product')])->with('success','Images Added Successfully');

    }


    public function show($id)
    {
        $product_gallery=ProductGallery::where('product_id',$id)->get();
        $product=$id;
        return view('restaurant.dashboard.pages.product_gallery.index',compact('product_gallery','product'));

    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {

    }

    public function destroy($id)
    {
        $product_gallery = ProductGallery::findOrFail($id);
        $path = 'images/product_gallery/' . $product_gallery->photo;
        if (file_exists($path)) {
            unlink($path);
        }
        Storage::delete($product_gallery->photo);
        $product_gallery->delete();
        return redirect()->back()->with('success', 'Image Deleted Successfully');
    }
}
