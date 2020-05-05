@extends('layouts.app')

@section('content')
    <div class="col-lg-12">

        <h1 class="my-4">Users</h1>
        <a class="btn btn-primary" href="{{route('users.create')}}">New user</a>
        <table class="table">
            <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Email</th>
                <th>Tipus</th>
                <th></th>
                <th></th>
            </tr>
            @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->rol->Rol}}</td>
                    <td><a class="btn btn-primary" href="{{route('users.edit',$user->id)}}">Edit</a></td>
                    <td>
                        <form action="{{ route('users.destroy', $user->id) }}" method="post">
                            <input class="btn btn-danger" type="submit" value="Delete" />
                            @method('delete')
                            @csrf
                        </form>
                    </td>
                </tr>
            @endforeach

            </thead>
        </table>
    </div>

@endsection