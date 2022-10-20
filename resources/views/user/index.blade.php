@extends('layouts.main')
@section('content')
    @if ($user = Session::get('success'))
        <div class="alert alert-success">
            User {{ $user->name }} is created!
        </div>
    @endif
    @if ($user = Session::get('delete.success'))
        <div class="alert alert-success">
            User {{ $user->name }} is deleted!
        </div>
    @endif
    <a href="{{route('users.create')}}">Create</a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <th scope="row">{{$user->id}}</th>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                        <a href="{{route('users.show',$user)}}" class="btn btn-primary">Show</a>
                        <a href="{{route('users.edit',$user)}}" class="btn btn-warning">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <?php echo $users->render(); ?>
@stop
