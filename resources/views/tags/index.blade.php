@extends('tags.layouts.main')
@section('title')
    Tags
@endsection('title')
@section('body')
    <div class="container">
        <b>Tags:</b>
        <br>
        <hr>
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <b>Tags:</b>
                    <br>
                    @foreach($tags as $tag)
                        {{$tag->title}}<br>
                    @endforeach
                </div>
                <div class="col-sm">
                    <div class="row">
                        <div class="col-sm">
                            <a href="{{route('tags.create')}}">
                                <button type="submit" class="btn btn-success">Create Tag</button>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <hr>
    </div>
@endsection('body')
