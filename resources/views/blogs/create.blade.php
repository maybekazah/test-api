@extends('blogs.layouts.main')
@section('title')
    blog create page
@endsection
@section('body')
    <div class="container">
        <b>Create:</b>
        <br>
        <hr>
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <form action="{{route('blogs.store')}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-sm">
                                <b>Title:</b> <br>
                                <b>Description:</b> <br>
                            </div>
                            <div class="col-sm">
                                <b>Tags:</b>
                            </div>
                            <div class="col-sm">
                                <button type="submit" class="btn btn-success">Store</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-sm">
                    <a href="{{route('blogs.index')}}">
                        <button type="submit" class="btn btn-primary">Back</button>
                    </a>
                </div>
            </div>
        </div>
        <hr>
    </div>
@endsection
