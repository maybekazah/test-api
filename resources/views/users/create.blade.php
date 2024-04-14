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
                <label for="name" class="form-label">name</label>
                <input class="form-control mb-3" type="text" name="name" id="name"
                       placeholder="{{old('name') ?? NULL}}">
                @error('email')
                {{$message}}
                @enderror
                <label for="email" class="form-label">email</label>
                <input class="form-control mb-3" type="email" name="email" id="email"
                       placeholder="{{old('email') ?? NULL}}">
                @error('type')
                {{$message}}
                @enderror
                <label for="type" class="form-label">type</label>
                <input class="form-control mb-3" type="text" name="type" id="type"
                       placeholder="{{old('type') ?? NULL}}">
                @error('github')
                {{$message}}
                @enderror
                <label for="github" class="form-label">github</label>
                <input class="form-control mb-3" type="text" name="github" id="github"
                       placeholder="{{old('github') ?? NULL}}">
                @error('city')
                {{$message}}
                @enderror
                <label for="city" class="form-label">city</label>
                <input class="form-control mb-3" type="text" name="city" id="city"
                       placeholder="{{old('city') ?? NULL}}">
                @error('phone')
                {{$message}}
                @enderror
                <label for="phone" class="form-label">phone</label>
                <input class="form-control mb-3" type="text" name="phone" id="phone"
                       placeholder="{{old('phone') ?? NULL}}">
                @error('birthday')
                {{$message}}
                @enderror
                <label for="birthday" class="form-label">birthday</label>
                <input class="form-control mb-3" type="text" name="birthday" id="birthday"
                       placeholder="{{old('birthday') ?? NULL}}">

                <ul class="list-group">


                    @foreach($roles as $key => $value)
                        <li class="list-group-item">
                            <input class="form-check-input me-1" type="radio" name="roles" value="{{$key + 1}}" id="{{$key}}">
                            <label class="form-check-label" for="{{$key}}">{{$value}}</label>
                        </li>
                    @endforeach
                </ul>

                <button class="btn btn-success m-3" type="submit">Create</button>

                пароль должен отправляться на почту (допилить)
            </form>
        </div>
    </div>
@endsection('body')
