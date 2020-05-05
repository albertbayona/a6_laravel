@extends('layouts.app')

@section('content')

    <div class="col-lg-12">

        <h1 class="my-4">Titol: {{$publication->titol}}</h1>
        @if($publication->property->image_route!=null)<img src="{{asset('storage/'.$publication->property->image_route)}}" width="250px">@endif
        <h3 class="my-4">Lloc: {{$publication->property->lloc}}</h3>
        <h3 class="my-4">Metres cuadrats: {{$publication->property->metres2}}</h3>
        <h3 class="my-4">Disponibilitat: {{$publication->disponibilitat}}</h3>
        <h3 class="my-4">Contacte: {{$publication->property->user->email}}</h3>

    </div>

@endsection