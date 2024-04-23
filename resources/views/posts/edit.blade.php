@extends('posts.layouts.main')
@section('title')
    Edit page
@endsection('title')
@section('body')
    <div class="container">Posts</div>
    <div class="container">
            <form action="{{route('posts.update', $post)}}" method="POST">
                @csrf
                @method('PATCH')
                <label for="title" class="form-label">title</label>
                <input class="form-control mb-3" type="text" name="title" id="title" placeholder="{{$post['title']}}">
                <label for="description" class="form-label">description</label>
                <input class="form-control mb-3" type="text" name="description" id="description" placeholder="{{$post['description']}}">
                <button class="btn btn-success m-3" type="submit">Update</button>
            </form>
        </div>
    </div>
    <div class="container">
        <a href="{{route('posts.index')}}">Вернуться</a>
    </div>
@endsection('body')
