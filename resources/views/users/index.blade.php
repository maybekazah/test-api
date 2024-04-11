@extends('admin.layouts.main')
@section('title')
    Users
@endsection('title')
@section('body')
    <div class="container">
        <div class="row">
            <div class="col-md-4">Users</div>
            <div class="col-md-4">
                <a href="{{route('users.create')}}">
                    Create
                </a>
            </div>
            <div class="list-group">
                @foreach($users as $user)
                    <a href="{{route('users.show', $user['id'])}}"
                       class="list-group-item list-group-item-action">{{$user['name']}}</a>
                @endforeach
            </div>
        </div>
@endsection('body')
