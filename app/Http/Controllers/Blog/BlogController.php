<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Http\Requests\Blog\BlogStoreRequest;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        return view('blogs/index', compact('blogs'));
    }

    public function create()
    {
        return view('blogs/create');
    }

    public function store(BlogStoreRequest $request)
    {
        return Blog::query()->create($request->validated());
    }

    public function show(Blog $blog)
    {
        return view('blogs.show', compact('blog'));
    }

    public function edit(Blog $blog)
    {
        return view('blogs/edit', compact('blog'));
    }


    public function destroy($id)
    {
        Blog::query()->find($id)->delete();
        return redirect()->route('blogs.index');
    }
}
