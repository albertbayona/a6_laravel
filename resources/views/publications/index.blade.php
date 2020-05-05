@extends('layouts.app')

@section('content')
    <div class="col-lg-12">

        <h1 class="my-4">Publications</h1>
        @if (auth::user()->hasAnyRole("user"))
            <a class="btn btn-primary" href="{{route('publications.create')}}">New publication</a>
        @endif
        <table class="table">
            <thead>
            <tr>
                <th>Titol</th>
                <th>Disponibilitat</th>
                <th>Propietat</th>
                <th></th>
                @if(auth::user()->hasAnyRole("user"))
                    <th></th>
                @endif
            </tr>
            @foreach($publications as $publication)
                <tr>
                    <td>{{$publication->titol}}</td>
                    <td>{{$publication->disponibilitat}}</td>
                    <td>{{$publication->property->title}}</td>
                @if (auth::user()->hasAnyRole("user"))
                    <td><a class="btn btn-primary" href="{{route('publications.edit',$publication->id)}}">Edit</a></td>
                @endif
                    <td>
                        <form action="{{ route('publications.destroy', $publication->id) }}" method="post">
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