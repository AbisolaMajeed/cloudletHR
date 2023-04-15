<?php

namespace App\Http\Controllers\Admin;

use App\Models\Blog;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\BlogFormRequest;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

class AdminBlogController extends Controller
{
    public function viewBlog()
    {
        $blogs = Blog::paginate(3);
        return view('pages.admin.blog.view', compact('blogs'));
    }

    public function addBlog()
    {
        return view('pages.admin.blog.add-edit');
    }

    public function storeBlog(BlogFormRequest $request)
    {
        $image = array();
        $file = $request->file('image');
        if ($request->hasFile('image')) {
            foreach ($file as $imagefile) {
                $filename = Cloudinary::upload($imagefile->getRealPath())->getSecurePath();
                $image[] = $filename;
            }
            $blog = array(
                'title' => $request->title,
                'author' => $request->author,
                'image' => implode('||', $image),
                'posted_by' => $request->posted_by,
                'content' => $request->content
            );
        } else {
            $blog = array(
                'title' => $request->title,
                'author' => $request->author,
                'posted_by' => $request->posted_by,
                'content' => $request->content
            );
        }

        if (Blog::create($blog)) {
            return redirect('dashboard/blog/view')->with('success', 'Blog Added successfully');
        } else {
            return redirect('dashboard/blog/view')->with('danger', 'Image upload failed!');
        }

        Blog::create($blog);
        return redirect('dashboard/blog/view')->with('success', 'Blog Added successfully');
    }

    public function editBlog($id)
    {
        $blog = Blog::find($id);
        return view('pages.admin.blog.add-edit')->with('blog', $blog);
    }

    public function updateBlog(BlogFormRequest $request)
    {
        $blog = Blog::find($request->id);
        $blog->title = $request->title;
        $blog->author = $request->author;

        if ($request->hasFile('image')) {
            $image = Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();
            $blog->image = $image;
        }

        $blog->posted_by = $request->posted_by;
        $blog->content = $request->content;

        if ($blog->save()) {
            return redirect('dashboard/blog/view')->with('success', 'Blog Updated successfully');
        } else {
            return redirect('dashboard/blog/view')->with('danger', 'Image upload failed!');
        }
    }

    public function deleteBlog($id)
    {
        $blog = Blog::where('id', $id)->delete();
        return redirect('dashboard/blog/view')->with('success', 'Blog Deleted successfully');
    }

    public function readMore($id)
    {
        $blogs = Blog::where('id', $id)->first();
        return view('pages.admin.blog.read-more', compact('blogs'));
    }
}
