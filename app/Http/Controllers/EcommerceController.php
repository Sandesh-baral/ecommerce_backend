<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Author;
use App\Models\Blog;

class EcommerceController extends Controller
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
        $author = Author::all();
        
        $blog = Blog::all();
        return view('ecommerce.index',compact('blog','author'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {   
        $author=Author::all();
        $blog = Blog::findOrFail($id);
        return view('ecommerce.show',compact('blog','author'));
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
