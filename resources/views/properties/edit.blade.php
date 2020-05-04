@extends('app')

@section('content')
    <div class="col-lg-12">

        <h1 class="my-4">Property edit</h1>
        <form action="{{route('properties.update',$property->id)}}" method="POST">
            @csrf
            @method('PUT')
            Title
            <br/>
            <input type="text" name="title" value="{{$property->title}}" class="form form-control">
            Lloc
            <br/>
            <input type="text" name="lloc" value="{{$property->lloc}}" class="form form-control">
            Owner
            <br/>
            <input class="list-group " list="user_id" name="user_id" value="{{$property->user_id}}">
            @foreach($users as $user)
                <datalist id="user_id">
                    <option value="{{$user->id}}">{{$user->email}}</option>
                </datalist>
            @endforeach
            <br/>
            <input type="submit" class="btn btn-primary" value="Save">
            <br/>
            <br/>
        </form>
        <br/>
    </div>

@endsection
