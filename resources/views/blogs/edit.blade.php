@extends('blogs.layouts.main')
@section('title')
    edit page
@endsection
@section('body')
    <div class="container">
        <b>Blog:</b>
        <br>
        <hr>
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
                                <a href="{{route('blogs.edit', $blog)}}">
                                    <button type="submit" class="btn btn-success">Edit</button>
                                </a>
                            </div>
                            <div class="col-sm">
                                <form action="{{route('blogs.destroy', $blog['id'])}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </div>
                        @endauth
                        <div class="col-sm">
                            <a href="{{route('blogs.index')}}">
                                <button type="submit" class="btn btn-primary">Back</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
    </div>
    <div class="container">
        // TODO
        <form action="{{route('blogs.update', 'blog')}}" method="POST">
            @csrf
            @method('PATCH')

            {{--            <div class="row">--}}

            {{--                <div class="col-sm">--}}
            <label for="tags" class="form-label">Выбрать тег (привязать тег):</label>
            <input type="text" class="form-control" list="tag" name="tag">
            <datalist id="tag">
                @foreach($tags as $tag)
                    <option value="{{$tag['title']}}"></option>
                @endforeach
            </datalist>
            {{--                </div>--}}

            {{--                <div class="col-sm">--}}
            <label for="title" class="form-label">Изменить title:</label>
            <input type="text" class="form-control" id="title" name="title"
                   placeholder="введите заголовок">
            {{--                </div>--}}

            {{--                <div class="col-sm">--}}
            <label for="description" class="form-label">Изменить description:</label>
            <textarea class="form-control" id="description" name="description"
                      placeholder="введите новый текст блога" rows="5"></textarea>
            {{--                </div>--}}


            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
@endsection






<div class="col-sm">
    Создать комментарий:
    <form action=""></form>
</div>
