<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\PostStoreRequest;
use App\Http\Requests\Post\PostUpdateRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use function Amp\Dns\query;

class PostController extends Controller
{
//    public function __construct()
//    {
//        $this->authorizeResource(Post::class, 'post');
//    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->authorizeResource(Post::class, 'post');
        $posts = Post::all();
        return view('posts/index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->authorizeResource(Post::class, 'post');
        return view('posts/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PostStoreRequest $request)
    {
        $this->authorizeResource(Post::class, 'post');
        Post::query()->create($request->validated());
        $posts = Post::all();
        return view('posts/index', compact('posts'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        $this->authorizeResource(Post::class, 'post');
        return view('posts/show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        $this->authorizeResource(Post::class, 'post');
        return view('posts/edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PostUpdateRequest $request, $id)
    {
        $this->authorizeResource(Post::class, 'post');
        Post::query()->where('id', $id)->update($request->validated());
        $post = Post::query()->find($id);
        return view('posts/show', compact('post'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->authorizeResource(Post::class, 'post');
    }
}
