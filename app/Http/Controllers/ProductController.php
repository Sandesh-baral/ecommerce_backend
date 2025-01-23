<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Products::all();
        return view('product.index',compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('/product/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'productname'=>'required|string|min:2',
            'description'=>'required',
            'image'=>'required|max:2048|image|mimes:png,jpg,jpeg',
            'price'=>'required'
        ]);
        
        // dd($blog->all());
        $product = new Products();
        $cloudinaryImage = $request->file('image')->storeOnCloudinary('ecommerce_products');
        $url=$cloudinaryImage->getSecurePath();
        $public_id = $cloudinaryImage->getPublicId();
        $product->name = $request->productname;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->image_url = $url;
        $product->image_public_id = $public_id;
        $product->save();
        // dd($url,$public_id);
        return redirect(route('product.index'))->with('success','Created successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Products::findOrFail($id);
        return view('product.edit',compact('product'));     
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
