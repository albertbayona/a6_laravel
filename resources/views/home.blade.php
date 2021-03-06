@extends('layouts.app')

@section('content')
{{--    <header>--}}
{{--        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">--}}
{{--            <ol class="carousel-indicators">--}}
{{--                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>--}}
{{--                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>--}}
{{--                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>--}}
{{--            </ol>--}}
{{--            <div class="carousel-inner" role="listbox">--}}
{{--                <!-- Slide One - Set the background image for this slide in the line below -->--}}
{{--                <div class="carousel-item active" style="background-image: url('http://placehold.it/1900x1080')">--}}
{{--                    <div class="carousel-caption d-none d-md-block">--}}
{{--                        <h3>First Slide</h3>--}}
{{--                        <p>This is a description for the first slide.</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!-- Slide Two - Set the background image for this slide in the line below -->--}}
{{--                <div class="carousel-item" style="background-image: url('http://placehold.it/1900x1080')">--}}
{{--                    <div class="carousel-caption d-none d-md-block">--}}
{{--                        <h3>Second Slide</h3>--}}
{{--                        <p>This is a description for the second slide.</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!-- Slide Three - Set the background image for this slide in the line below -->--}}
{{--                <div class="carousel-item" style="background-image: url('http://placehold.it/1900x1080')">--}}
{{--                    <div class="carousel-caption d-none d-md-block">--}}
{{--                        <h3>Third Slide</h3>--}}
{{--                        <p>This is a description for the third slide.</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">--}}
{{--                <span class="carousel-control-prev-icon" aria-hidden="true"></span>--}}
{{--                <span class="sr-only">Previous</span>--}}
{{--            </a>--}}
{{--            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">--}}
{{--                <span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
{{--                <span class="sr-only">Next</span>--}}
{{--            </a>--}}
{{--        </div>--}}
{{--    </header>--}}
    <h1 class="my-4">Publicacions</h1>

    <!-- Marketing Icons Section -->
{{--    <div class="row">--}}
{{--        @foreach($publications as $publication)--}}
{{--        <div class="col-lg-4 mb-4">--}}
{{--            <div class="card h-100">--}}
{{--                <h4 class="card-header">{{$publication->titol}}</h4>--}}
{{--                <div class="card-body">--}}
{{--                    <p class="card-text">Metres quadrats: {{$publication->property->metres2}}</p>--}}
{{--                    <p class="card-text">Lloc:{{$publication->property->lloc}}</p>--}}
{{--                </div>--}}
{{--                <div class="card-footer">--}}
{{--                    <a href="{{route("publications.show",$publication->id)}}" class="btn btn-primary">Learn More</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        @endforeach--}}
    <!-- /.row -->

    <!-- Portfolio Section -->
{{--    <h2>Portfolio Heading</h2>--}}

    <div class="row">
        @foreach($publications as $publication)
        <div class="col-lg-4 col-sm-6 portfolio-item">
            <div class="card h-100">
                <a href="{{route("publications.show",$publication->id)}}"><img class="card-img-top" @if($publication->property->image_route!=null)src="{{asset('storage/'.$publication->property->image_route)}}" width="250px"@endif alt=""></a>
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="{{route("publications.show",$publication->id)}}">{{$publication->titol}}</a>
                    </h4>
                    <p class="card-text">Metres quadrats: {{$publication->property->metres2}}</p>
                    <p class="card-text">Lloc:{{$publication->property->lloc}}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <!-- /.row -->

{{--    <!-- Features Section -->--}}
{{--    <div class="row">--}}
{{--        <div class="col-lg-6">--}}
{{--            <h2>Modern Business Features</h2>--}}
{{--            <p>The Modern Business template by Start Bootstrap includes:</p>--}}
{{--            <ul>--}}
{{--                <li>--}}
{{--                    <strong>Bootstrap v4</strong>--}}
{{--                </li>--}}
{{--                <li>jQuery</li>--}}
{{--                <li>Font Awesome</li>--}}
{{--                <li>Working contact form with validation</li>--}}
{{--                <li>Unstyled page elements for easy customization</li>--}}
{{--            </ul>--}}
{{--            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, omnis doloremque non cum id reprehenderit, quisquam totam aspernatur tempora minima unde aliquid ea culpa sunt. Reiciendis quia dolorum ducimus unde.</p>--}}
{{--        </div>--}}
{{--        <div class="col-lg-6">--}}
{{--            <img class="img-fluid rounded" src="http://placehold.it/700x450" alt="">--}}
{{--        </div>--}}
{{--    </div>--}}
    <!-- /.row -->

    <hr>

{{--    <!-- Call to Action Section -->--}}
{{--    <div class="row mb-4">--}}
{{--        <div class="col-md-8">--}}
{{--            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, expedita, saepe, vero rerum deleniti beatae veniam harum neque nemo praesentium cum alias asperiores commodi.</p>--}}
{{--        </div>--}}
{{--        <div class="col-md-4">--}}
{{--            <a class="btn btn-lg btn-secondary btn-block" href="#">Call to Action</a>--}}
{{--        </div>--}}
{{--    </div>--}}

@endsection
