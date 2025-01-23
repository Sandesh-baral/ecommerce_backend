<?php

namespace App\Http\Controllers;


use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use App\Models\Author;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $author = Author::all();
        
        $blog = Blog::all();
        return view('blog.index',compact('blog','author'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   
        $author = Author::all();
        return view('blog.create',compact('author'));
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
        
        // dd($blog->all());
        $blog = new Blog();
        $cloudinaryImage = $request->file('image')->storeOnCloudinary('ecommerce_blog');
        $url=$cloudinaryImage->getSecurePath();
        $public_id = $cloudinaryImage->getPublicId();
        $blog->title = $request->title;
        $blog->body = $request->body;
        $blog->image_url = $url;
        $blog->author_id=$request->author_id;
        $blog->image_public_id = $public_id;
        $blog->save();
        // dd($url,$public_id);
        return redirect(route('blog.index'))->with('success','Created successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $blog = Blog::findOrFail($id);
        return view('blog.show',compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $blog= Blog::findOrFail($id);
        $author=Author::all();
        // dd($blog, $author);
        return view('blog.edit', compact('blog','author'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title'=>'required|string|min:2',
            'body'=>'required',
            'image'=>'nullable|max:2048|image|mimes:png,jpg',
            'author_id'=>'required'
        ]);

        $blog = Blog::findOrFail($id);


        if($request->hasfile('image')){
            Cloudinary::destroy($blog->image_public_id);
            $cloudinaryImage = $request->file('image')->storeOnCloudinary('ecommerce_blog');
            $url=$cloudinaryImage->getSecurePath();
            $public_id = $cloudinaryImage->getPublicId();
        
        $blog->update([
            'image_url'=>$url,
            'image_public_id'=>$public_id,
        ]);
        }

        $blog->title= $request->title;
        $blog->body=$request->body;
        $blog->author_id=$request->author_id;
        $blog->save();
        return redirect(route('blog.index'))->with('success','Blog updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
