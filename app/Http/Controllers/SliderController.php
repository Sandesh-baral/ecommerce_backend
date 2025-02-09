<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\Slider;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');  // Apply middleware to the entire controller
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $slider = Slider::all();

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   
        $products = Products::all();
        return view('slider.create',compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $slider = new Slider();
        $slider->product_id = $request->product_id;
        $slider->save();
        return redirect(route('ecommerce.index'));
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
        //
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
