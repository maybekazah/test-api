<?php

namespace App\Http\Controllers\Tag;

use App\Http\Controllers\Controller;
use App\Http\Requests\Tag\TagStoreRequest;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index()
    {
        $tags = Tag::all();
        return view('tags/index', compact('tags'));
    }

    public function create()
    {
        return view('tags/create');
    }


    public function store(TagStoreRequest $request)
    {
        dd($request);
        Tag::query()->create($request->validated());
        return redirect()->route('tags.index');
    }
}
