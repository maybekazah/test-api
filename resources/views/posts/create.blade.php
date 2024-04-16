@extends('posts.layouts.main')
@section('title')
    Posts create
@endsection('title')
@section('body')
    <div class="container">Create page</div>
    <div class="container">
        <form action="{{Route('posts.store')}}" method="POST">
            @csrf
            <label for="title">title</label>
            <input type="text" id="title" name="title">
            <button type="submit">Create</button>
        </form>
    </div>
@endsection('body')
