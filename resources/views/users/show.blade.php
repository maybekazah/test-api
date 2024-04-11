@extends('admin.layouts.main')
@section('title')
    User Page
@endsection('title')
@section('body')
    <div class="container">
        <div class="row">
            <div class="col-md-4">User Page</div>
            <div class="col-md-4">
                name: {{$user['name']}}<br>
                email: {{$user['email']}}<br>
                about: {{$user['about']}}<br>
                type: {{$user['type']}}<br>
                github: {{$user['github']}}<br>
                city: {{$user['city']}}<br>
                phone: {{$user['phone']}}<br>
                birthday: {{$user['birthday']}}<br>
            </div>
            <div class="container">
                <a href="{{route('users.edit', $user['id'])}}">Edit</a>
            </div>
        </div>
@endsection('body')
