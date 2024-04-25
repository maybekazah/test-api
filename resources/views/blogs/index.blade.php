@extends('blogs.layouts.main')
@section('title')
    blogs
@endsection
@section('body')
    <div class="container">
        <b>Blogs:</b>
        <br>
        <hr>
        @foreach($blogs as $blog)
            <div class="container">
                <div class="row">
                    <div class="col-sm">
                        <b>Number:</b> {{$blog['id']}}<br>
                        <b>Title:</b> {{$blog['title']}}<br>
                        <b>Description:</b> {{$blog['description']}}<br>
                    </div>

                    <div class="col-sm">
                        <b>Tags:</b>
                        @foreach($blog->tags as $tag)
                            {{$tag->title}}<br>
                        @endforeach
                    </div>
                    <div class="col-sm">
                        <b>Comments:</b>
                        @foreach($blog->comments as $comment)
                            <b>User:</b> {{$comment->user->name}}<br>
                            <b>Content:</b> {{$comment->text}}<br>
                            <hr>
                        @endforeach
                    </div>
                    <div class="col-sm">
                        <div class="row">
                            @auth()
                            <div class="col-sm">
                        <a href="{{route('blogs.create')}}">
                            <button type="submit" class="btn btn-success">Create Blog</button>
                        </a>
                            </div>
                            @endauth
                            <div class="col-sm">
                                <a href="{{route('blogs.show', $blog)}}">
                                    <button type="submit" class="btn btn-primary">Show Blog</button>
                                </a>
                            </div>
                            </div>
                    </div>
                </div>
            </div>
            <hr>
        @endforeach
    </div>
@endsection
