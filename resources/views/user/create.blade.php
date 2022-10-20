@extends('layouts.main')
@section('content')
    <form action="{{route('users.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="name" class="form-control" required name="name" id="name" placeholder="Enter email">
        </div>
        @error('name')
            <div class="error">{{ $message }}</div>
        @enderror
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" required name="email" id="email" placeholder="Enter email">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" required name="password" id="password" placeholder="Password">
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@stop
