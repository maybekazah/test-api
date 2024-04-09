@extends('admin.layouts.main')
@section('title')
    Admin panel
@endsection('title')
@section('body')
    {{session('message') ?? NULL}}
    <div class="container">Админка</div>
@endsection('body')
