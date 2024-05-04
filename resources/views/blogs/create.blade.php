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
                                <label for="title" class="form-label"><b>Title:</b></label>
                                <input type="text" name="title" class="form-control" id="title"
                                       placeholder="{{old('title') ?? NULL}}">
                            </div>
                            <div class="col-sm">
                                <label for="description" class="form-label"><b>Description:</b></label>
                                <input type="text" name="description" class="form-control" id="description"
                                       placeholder="{{old('description') ?? NULL}}">
                            </div>
                            <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
                            <div class="col-sm">
                                <label for="tag" class="form-label">Tags:</label>
                                <input type="text" class="form-control" list="tag" name="tag">
                                <datalist id="tag">
                                    @foreach($tags as $tag)
                                        <option value="{{$tag['title']}}"></option>
                                    @endforeach
                                </datalist>
                            </div>
                            <div class="col-sm">
                                <button type="submit" class="btn btn-success">Store</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-sm">
                    <a href="{{route('tags.index')}}">
                        <button type="submit" class="btn btn-primary">Tags</button>
                    </a>
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
