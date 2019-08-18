<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use Storage;

class BlogsController extends Controller
{
    //get all the blogs from table
     public function index(){

     	$blogs = Blog::all();
    	return view('blogs.index', ['blogs' =>$blogs]);
    }

    //show blogs by id
    public function show($id)
    {
        $blog = Blog::find($id);
        return view('blogs.show', ['blog' => $blog]);
    }

    //edit blogs by id
    public function edit($id)
    {
        $blog = Blog::find($id);
        return view('blogs.edit', ['blog' => $blog]);
    }

    //update blogs
    public function update(Request $request, $id)
    {
        $blog = Blog::find($id);

        $path = Storage::putFile('public', $request->file('files'));

        $url = Storage::url($path);

        $blog->image = $url;
        $blog->title = $request->input('title');
    	$blog->content = $request->input('content');

    	$blog->update();

    	return redirect()->route('blogs_path', ['blog' => $blog]);
    }
    
    //delete blogs
    public function destroy($id)
    {
        $blog = Blog::find($id);
        
        $blog->delete();

        return redirect()->route('blogs_path');
    }

    //create blogs
    public function create()
    {
    	return view('blogs.create');
    }
    
    //store the blogs
    public function store(Request $request)
    {

        $blog = new Blog;
        
        $path = Storage::putFile('public', $request->file('files'));

        $url = Storage::url($path);

        $blog->image = $url;
    	$blog->title = $request->input('title');
    	$blog->content = $request->input('content');

    	$blog->save();

    	return redirect()->route('blogs_path');

    }
}
