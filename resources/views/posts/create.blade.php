@extends('posts.layouts.main')
@section('title')
    Posts create
@endsection('title')
@section('body')
    <div class="container">Create page</div>
    <div class="container">
        <form action="{{route('posts.store')}}" method="POST">
            @csrf
            <label for="title" class="form-label">title</label>
            <input class="form-control mb-3" type="text" name="title" id="title">
            <label for="description" class="form-label">description</label>
            <input class="form-control mb-3" type="text" name="description" id="description">
            <button class="btn btn-success m-3" type="submit">Create</button>
        </form>
    </div>
@endsection('body')
