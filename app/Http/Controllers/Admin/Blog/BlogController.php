<?php

namespace App\Http\Controllers\Admin\Blog;

use App\Blog;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();

        return view('admin.blog.blogs')->with([
            'blogs' => $blogs
        ]);
    }

    public function create()
    {
        return view('admin.blog.blog_create');
    }

    public function show(Blog $blog)
    {
        return view('admin.blog.blog')->with([
            'blog' => $blog,
        ]);
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|min:4|max:255',
            'post' => 'required|string|min:4|max:5000',
            'img' => 'required|image:jpeg,png|max:1000',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $blog = new Blog();
        $blog->title = $request->title;
        $blog->details = $request->post;

        if ($request->has('img')) {

            $file = $request->file('img');
            $dateTime = date('Ymd_His');
            $filename =  $dateTime . '-' . $file->getClientOriginalName();
            $savePath = 'assets/uploads/blog/';

            $data['img'] = $filename;
            $blog->img = $data['img'];
            $blog->save();
            $file->move($savePath, $filename);
        }

        $blog->save();

        return redirect()->back()->with('success', 'Created Successfully');
    }

    public function edit(Blog $blog)
    {
        return view('admin.blog.blog_edit')->with([
            'blog' => $blog,
        ]);
    }

    public function update(Request $request, Blog $blog)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|min:4|max:255',
            'post' => 'required|string|min:4|max:5000',
            'img' => 'image:jpeg,png|max:1000',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $blog->title = $request->title;
        $blog->details = $request->post;

        if ($request->has('img')) {

            $file = $request->file('img');
            $dateTime = date('Ymd_His');
            $filename = '/assets/img/' . $dateTime . '-' . $file->getClientOriginalName();
            $savePath = 'assets/img/';

            $data['img'] = $filename;
            $blog->img = $data['img'];
            $blog->save();
            $file->move($savePath, $filename);
        }

        $blog->save();

        return redirect()->back()->with('success', 'Updated');
    }

    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);

        $blog->delete();

        return redirect()->back()->with('success', 'Deleted Successfully');
    }


    public function trashed()
    {
        $trashed_blogs = Blog::onlyTrashed()->orderBy('created_at', 'desc')->paginate(10);

        return view('admin.blog.blogs_trashed')->with(['blogs' => $trashed_blogs]);
    }

    public function retrieve($id)
    {
        $speaker = Blog::withTrashed()->find($id);
        $speaker->restore();

        return redirect()->route('admin.blog.index')->with('success', 'Successfully Restored');
    }

    public function permanent_delete($id)
    {
        $speaker = Blog::withTrashed()->find($id);
        $speaker->forceDelete();

        return redirect()->back()->with('success', 'Parmanently Deleted');
    }
}
