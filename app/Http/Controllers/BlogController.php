<?php

namespace App\Http\Controllers;

use App\Models\Blog;

class BlogController extends Controller
{
    public function blog()
    {
        $blogs = Blog::paginate(6);
        return view('pages.blog', compact('blogs'));
    }

    public function blogSingle($id)
    {
        $blog = Blog::where('id', $id)->first();
        return view('pages.blog-single')->with('blog', $blog);
    }
}
