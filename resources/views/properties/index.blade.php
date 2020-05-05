@extends('layouts.app')

@section('content')
    <div class="col-lg-12">

        <h1 class="my-4">Properties</h1>
        @if (auth::user()->hasAnyRole("user"))
            <a class="btn btn-primary" href="{{route('properties.create')}}">New property</a>
        @endif
        <table class="table">
            <thead>
            <tr>
                <th>Title</th>
                <th>Lloc</th>
                <th>Metres2</th>
                <th></th>
                <th></th>
            </tr>
            @foreach($properties as $property)
            <tr>
                <td>{{$property->title}}</td>
                <td>{{$property->lloc}}</td>
                <td>{{$property->metres2}}</td>
                <td><a class="btn btn-primary" href="{{route('properties.edit',$property->id)}}">Edit</a></td>
                <td>
                    <form action="{{ route('properties.destroy', $property->id) }}" method="post">
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