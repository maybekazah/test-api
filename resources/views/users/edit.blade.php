@extends('admin.layouts.main')
@section('title')
    edit User
@endsection('title')
@section('body')
    <div class="container">
        <div class="input-group mb-3">
            @can('edit-user')
                <form action="{{route('users.update', $user['id'])}}" method="POST">
                    @csrf
                    @method('PATCH')


                    <label for="name" class="form-label">name</label>
                    <input class="form-control mb-3" type="text" name="name" id="name"
                           value="{{ $errors->any() ? old('name') : $user['name']}}">
                    <div style="color: red">
                        @error('name')
                        {{$message}}
                        @enderror
                    </div>

                    <label for="email" class="form-label">email</label>
                    <input class="form-control mb-3" type="email" name="email" id="email"
                           value="{{ $errors->any() ? old('email') : $user['email']}}">
                    <div style="color: red">
                        @error('email')
                        {{$message}}
                        @enderror
                    </div>

                    <label for="type" class="form-label">type</label>
                    <input class="form-control mb-3" type="text" name="type" id="type"
                           value="{{ $errors->any() ? old('type') : $user['type']}}">
                    <div style="color: red">
                        @error('type')
                        {{$message}}
                        @enderror
                    </div>

                    <label for="github" class="form-label">github</label>
                    <input class="form-control mb-3" type="text" name="github" id="github"
                           value="{{ $errors->any() ? old('github') : $user['github']}}">
                    <div style="color: red">
                        @error('github')
                        {{$message}}
                        @enderror

                    </div>

                    <label for="city" class="form-label">city</label>
                    <input class="form-control mb-3" type="text" name="city" id="city"
                           value="{{ $errors->any() ? old('city') : $user['city']}}">
                    <div style="color: red">
                        @error('city')
                        {{$message}}
                        @enderror
                    </div>

                    <label for="phone" class="form-label">phone</label>
                    <input class="form-control mb-3" type="text" name="phone" id="phone"
                           value="{{ $errors->any() ? old('phone') : $user['phone']}}">
                    <div style="color: red">
                        @error('phone')
                        {{$message}}
                        @enderror
                    </div>

                    <label for="birthday" class="form-label">birthday</label>
                    <input class="form-control mb-3" type="text" name="birthday" id="birthday"
                           value="{{ $errors->any() ? old('birthday') : $user['birthday']}}">
                    <div style="color: red">
                        @error('birthday')
                        {{$message}}
                        @enderror

                    </div>
                    <button class="btn btn-success m-3" type="submit">Edit</button>
                    {{--                <ul class="list-group">--}}

                    {{--                    @foreach($roles as $key => $value)--}}
                    {{--                        <li class="list-group-item">--}}
                    {{--                            <input class="form-check-input me-1" type="radio" name="roles" value="{{$key + 1}}" id="{{$key}}">--}}
                    {{--                            <label class="form-check-label" for="{{$key}}">{{$value}}</label>--}}
                    {{--                        </li>--}}
                    {{--                    @endforeach--}}
                    {{--                </ul>--}}
                </form>
            @endcan
        </div>
    </div>
@endsection('body')
