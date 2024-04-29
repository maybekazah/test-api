@extends('tags.layouts.main')
@section('title')
    Tag create
@endsection('title')
@section('body')
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <form action="{{route('tags.store')}}" method="POST">
                    @csrf
                    <label for="tag">Create tag:</label>
                    <input type="text" id="tag" name="title" placeholder="название тега">
                    <button type="submit" class="btn btn-success">Store</button>
                </form>
            </div>
            <div class="col-sm">
                <a href="{{route('tags.index')}}">
                    <button type="submit" class="btn btn-primary">Back</button>
                </a>
            </div>
        </div>
        <hr>
    </div>
@endsection('body')
