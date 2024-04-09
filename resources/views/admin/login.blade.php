@extends('admin.layouts.main')
@section('title')
    login page
@endsection('title')
@section('body')
    <div class="container">
        {{session('message') ?? NULL}}
        <form action="{{route('admin.login_process')}}" method="POST">
            @csrf
            <div class="mb-3">
                @error('email')
                {{$message}}
                @enderror
                <label for="email" class="form-label">{{old('email') ?? 'Email address'}}</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="mb-3">
                @error('password')
                {{$message}}
                @enderror
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <button type="submit" class="btn btn-success">Войти</button>
        </form>
    </div>
@endsection('body')
