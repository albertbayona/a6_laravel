@extends('layouts.app')

@section('content')
    <div class="col-lg-12">

        <h1 class="my-4">Property create</h1>
        <form action="{{route('properties.store')}}" method="POST">
            @csrf
            @method('POST')
            Title
            <br/>
            <input type="text" name="title" value="" class="form form-control">
            Lloc
            <br/>
            <input type="text" name="lloc" value="" class="form form-control">
            <br/>
            Metres quadrats
            <input type="number" name="metres2" value="" class="form form-control">
            <br/>
            <input type="submit" class="btn btn-primary" value="Save">
            <br/>
            <br/>
        </form>
        <br/>
    </div>

@endsection
