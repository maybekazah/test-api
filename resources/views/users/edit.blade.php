@extends('admin.layouts.main')
@section('title')
    Create User
@endsection('title')
@section('body')
    <div class="container">
        <div class="input-group mb-3">
            <form action="{{route('users.update', $user['id'])}}" method="POST">
                @csrf
                @method('PATCH')
                @error('name')
                {{$message}}
                @enderror
                <label for="name" class="form-label">name</label>
                <input class="form-control mb-3" type="text" name="name" id="name" placeholder="{{$user['name']}}">
                @error('email')
                {{$message}}
                @enderror
                <label for="email" class="form-label">email</label>
                <input class="form-control mb-3" type="email" name="email" id="email" placeholder="{{$user['email']}}">
                @error('type')
                {{$message}}
                @enderror
                <label for="type" class="form-label">type</label>
                <input class="form-control mb-3" type="text" name="type" id="type" placeholder="{{$user['type']}}">
                @error('github')
                {{$message}}
                @enderror
                <label for="github" class="form-label">github</label>
                <input class="form-control mb-3" type="text" name="github" id="github" placeholder="{{$user['github']}}">
                @error('city')
                {{$message}}
                @enderror
                <label for="city" class="form-label">city</label>
                <input class="form-control mb-3" type="text" name="city" id="city" placeholder="{{$user['city']}}">
                @error('phone')
                {{$message}}
                @enderror
                <label for="phone" class="form-label">phone</label>
                <input class="form-control mb-3" type="text" name="phone" id="phone" placeholder="{{$user['phone']}}">
                @error('birthday')
                {{$message}}
                @enderror
                <label for="birthday" class="form-label">birthday</label>
                <input class="form-control mb-3" type="text" name="birthday" id="birthday" placeholder="{{$user['birthday']}}">
                <button class="btn btn-success m-3" type="submit">Edit</button>

            </form>
        </div>
    </div>
@endsection('body')
