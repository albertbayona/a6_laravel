@extends('layouts.app')

@section('content')
    <div class="col-lg-12">

        <h1 class="my-4">Publication create</h1>
        <form action="{{route('publications.store')}}" method="POST">
            @csrf
            @method('POST')
            Title
            <br/>
            <input type="text" name="titol" value="" class="form form-control">
            Disponibilitat
            <br/>
            <input type="text" name="disponibilitat" value="" class="form form-control">
            <br/>
            Propietat:
            <select class="list-group " list="user_id" name="propietat_id">
                <option value="---">---</option>
                @foreach($properties as $property)
                    <option value="{{$property->id}}">{{$property->title}}</option>
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
