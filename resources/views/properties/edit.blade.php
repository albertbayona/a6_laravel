@extends('layouts.app')

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
            @if(auth::user()->hasAnyRole("admin"))
                <p>Propietari actual: {{$property->user->email}}</p>
                <select class="list-group " list="user_id" name="user_id" value="{{$property->user_id}}">
                <option value="{{$property->user_id}}">DEFAULT</option>
                @foreach($users as $user)
                        <option value="{{$user->id}}">{{$user->email}}</option>
                @endforeach
                </select>
            @endif
            @if($property->image_route!=null)<img src="{{asset('storage/'.$property->image_route)}}" width="250px"><br/>@endif
            <input type="file" name="photo">
            <br/>
            <input type="submit" class="btn btn-primary" value="Save">
            <br/>
            <br/>
        </form>
        <br/>
    </div>

@endsection
