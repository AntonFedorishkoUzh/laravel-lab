@extends('layouts.main')
@section('content')
    <form action="{{route('users.update',$user)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('patch')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="name" class="form-control" value="{{$user->name}}" required name="name" id="name" placeholder="Enter email">
        </div>
        @error('name')
            <div class="error">{{ $message }}</div>
        @enderror

        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" value="{{$user->email}}" required name="email" id="email" placeholder="Enter email">
        </div>
        @error('email')
        <div class="error">{{ $message }}</div>
        @enderror

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="Password">
        </div>
        @error('password')
        <div class="error">{{ $message }}</div>
        @enderror


        <br>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@stop
