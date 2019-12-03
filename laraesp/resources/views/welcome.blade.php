@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12">
            <div class="bd-example">
              <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  @foreach ($arts as $key => $art)
                      <li data-target="#carouselExampleCaptions" data-slide-to="{{ $key }}" class="@if($key == 0) active @endif"></li>
                  @endforeach
                </ol>
                <div class="carousel-inner">
                    @foreach ($arts as $key => $art)
                      <div class="carousel-item @if($key == 0) active @endif">
                        <figure style="background-image: url({{ asset($art->image) }})"></figure>
                        <div class="carousel-caption d-none d-md-block bg-white text-dark">
                          <h3>{{ $art->name }}</h3>
                          <p>{{ $art->content }}</p>
                        </div>
                      </div>
                    @endforeach
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
        </div>
    </div>
    <div class="row">
      <div class="col-xl-12">
        @foreach ($cats as $cat)
        <h3 class="h3"><i class="fa fa-list"></i>{{ $cat->name }}</h3>
        <hr>
          <div class="row">
            @foreach ($artsbycats as $abc)
              @if ($abc->category_id == $cat->id)
              <div class="col-xl-3 mb-4">
                <div class="card" style="width: 18rem; height: 24rem;">
                    <img src="{{ asset($abc->image)}}" class="card-img-top">
                    <div class="card-body">
                      <span class="badge badge-dark">{{ $abc->category->name }}</span>
                      <h5 class="card-title">{{$abc->name}}</h5>
                      <p class="card-text">{{$abc->content}}</p>
                      <a href="#" class="btn btn-danger">Ver más</a>
                    </div>
                </div>
              </div>
              @endif
            @endforeach 
          </div>
        @endforeach
      </div>
    </div>
</div>

@endsection