@extends('layouts.app')

@section('content')
    <div class="col-lg-12">

        <h1 class="my-4">User edit</h1>
        <form action="{{route('users.update',$user->id)}}" method="POST">
            @csrf
            @method('PUT')
            Name
            <br/>
            <input type="text" name="name" value="{{$user->name}}" class="form form-control">
            Email
            <br/>
            <input type="text" name="email" value="{{$user->email}}" class="form form-control">
            New password
            <br/>
            <input type="password" name="password" value="" class="form form-control">
            <br/>
            <select class="list-group " list="rol_id" class="form form-control" name="role">
                @foreach($roles as $rol)
                    <option value="{{$rol->id}}">{{$rol->Rol}}</option>
                @endforeach
            </select>
            <br/>
            <input type="submit" class="btn btn-primary" value="Save">
            <br/>
            <br/>
        </form>
        <br/>
    </div>

@endsection
