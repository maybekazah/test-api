@extends('posts.layouts.main')
@section('title')
    Show page
@endsection('title')
@section('body')
    <div class="container">Posts</div>
    <div class="container">
        id : {{$post['id']}}<br>
        title : {{$post['title']}} ><br>
        description : {{$post['description']}}<br>
        <hr>
        Comments:
        @foreach($post->comments as $comment)
            username: {{$comment->user->name}}<br>
            comment : {{$comment['text']}}<br>
            <hr>
        @endforeach
        <hr>
        <br>
        Tags: <br>
        @foreach($post->tags as $tag)
            {{$tag->title}}<br>

        @endforeach
        <br>
        <hr>
        <a href="{{route('posts.edit', $post)}}">edit</a><br>
        <hr>
    </div>
    <div class="container">
        <a href="{{route('posts.index')}}">Вернуться</a>
    </div>
@endsection('body')
