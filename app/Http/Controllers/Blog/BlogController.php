<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Http\Requests\Blog\BlogStoreRequest;
use App\Http\Requests\Blog\BlogUpdateRequest;
use App\Models\Blog;
use App\Models\Tag;


class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        return view('blogs.index', compact('blogs'));
    }

    public function create()
    {
        $tags = Tag::all();
        return view('blogs.create', compact('tags'));
    }

    public function store(BlogStoreRequest $request)
    {
        $blog = Blog::query()->create($request->validated());
        return view('blogs.show', compact('blog'));
    }

    public function show(Blog $blog)
    {
        return view('blogs.show', compact('blog'));
    }

    public function edit(Blog $blog)
    {
        $tags = Tag::all();
        return view('blogs.edit', compact(['blog', 'tags']));
    }


    public function update(Blog $blog, BlogUpdateRequest $request)
    {
        dump($blog);
        dd($request);
    }

    public function destroy($id)
    {
        Blog::query()->find($id)->delete();
        return redirect()->route('blogs.index');
    }
}
