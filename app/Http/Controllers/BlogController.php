<?php

namespace App\Http\Controllers;


use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Author;
use App\Models\Blog;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   
        $author = Author::all();
        return view('blog.create',compact($author));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required|string|min:2',
            'body'=>'required',
            'image'=>'required|max:2048|image|mimes:png,jpg',
            'author_id'=>'required'
        ]);

        $blog = new Blog();
        $cloudinaryImage = $request->file('image')->storeOnCloudinary('ecommerce_blog');
        $url=$cloudinaryImage->getSecurePath();
        $public_id = $cloudinaryImage->getPublicId();
        $blog->title = $request->title;
        $blog->body = $request->body;
        $blog->image_url = $url;
        $blog->image_public_id = $public_id;
        $blog->save();

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
