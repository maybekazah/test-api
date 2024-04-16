@extends('posts.layouts.main')
@section('title')
    Posts
@endsection('title')
@section('body')
    <div class="container"><a href="{{route('posts.create')}}">create</a></div>
    <div class="container">Posts</div>
    @foreach($posts as $post)
        id : {{$post['id']}}<br>
        title : {{$post['title']}}<br>
        description : {{$post['description']}}<br><br>
    @endforeach
@endsection('body')
