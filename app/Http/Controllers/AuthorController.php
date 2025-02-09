<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
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
        return view('author.index' , compact('author'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('author.create');


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name'=>'required',
            'designation'=>'required'

        ]);
        

        $author = new Author();
        $author->name=$request->name;
        $author->designation=$request->designation;
        $author->save();
        
        // Author::create($request);
        return redirect()->route('author.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $author = Author::findOrFail($id);
        return view('author.show',compact('author'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $author = Author::query()->where('id','=',$id)->first();
        if (!$author){
            abort(404);
        }
    return view('author.edit',compact('author'));
    
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(['name'=>'required',
            'designation'=>'required']


        );
        $author = Author::findOrFail($id);
        $author->name = $request->name;
        $author->designation = $request->designation;
        $author->save();
    
        // Redirect to index with a success message
        return redirect()->route('author.index')->with('success', 'Author updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $author=Author::query()->where('id','=',$id)->first();
        $author->delete();
        return redirect()->route('author.index');
        
    }
}
