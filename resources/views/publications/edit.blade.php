@extends('layouts.app')

@section('content')
    <div class="col-lg-12">

        <h1 class="my-4">Publications edit</h1>
        <form action="{{route('publications.update',$publication->id)}}" method="POST">
            @csrf
            @method('PUT')
            Title
            <br/>
            <input type="text" name="titol" value="{{$publication->titol}}" class="form form-control">
            Lloc
            <br/>
            <input type="text" name="disponibilitat" value="{{$publication->disponibilitat}}" class="form form-control">
            <br/>
            <p>Propietat actual: {{$publication->property->title}}</p>

            <br/>
            <input type="submit" class="btn btn-primary" value="Save">
            <br/>
            <br/>
        </form>
        <br/>
    </div>

@endsection
