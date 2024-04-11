@extends('admin.layouts.main')
@section('title')
    Create User
@endsection('title')
@section('body')
    <div class="container">
        <div class="input-group mb-3">
            <form action="{{route('users.store')}}" method="POST">
                @csrf
                @error('name')
                {{$message}}
                @enderror
                <label for="name" class="form-label">{{old('name') ?? 'name'}}</label>
                <input class="form-control mb-3" type="text" name="name" id="name">
                @error('email')
                {{$message}}
                @enderror
                <label for="email" class="form-label">{{old('email') ?? 'email'}}</label>
                <input class="form-control mb-3" type="email" name="email" id="email">
                @error('type')
                {{$message}}
                @enderror
                <label for="type" class="form-label">{{old('type') ?? 'type'}}</label>
                <input class="form-control mb-3" type="text" name="type" id="type">
                @error('github')
                {{$message}}
                @enderror
                <label for="github" class="form-label">{{old('github') ?? 'github'}}</label>
                <input class="form-control mb-3" type="text" name="github" id="github">
                @error('city')
                {{$message}}
                @enderror
                <label for="city" class="form-label">{{old('city') ?? 'city'}}</label>
                <input class="form-control mb-3" type="text" name="city" id="city">
                @error('phone')
                {{$message}}
                @enderror
                <label for="phone" class="form-label">{{old('phone') ?? 'phone'}}</label>
                <input class="form-control mb-3" type="text" name="phone" id="phone">
                @error('birthday')
                {{$message}}
                @enderror
                <label for="birthday" class="form-label">{{old('birthday') ?? 'birthday'}}</label>
                <input class="form-control mb-3" type="text" name="birthday" id="birthday">

                <button class="btn btn-success m-3" type="submit">Create</button>

                пароль должен отправляться на почту
            </form>
        </div>
    </div>
@endsection('body')
