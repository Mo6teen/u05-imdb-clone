<!DOCTYPE html>

<html lang="en">
@include('header')
@extends('dashboard')
@include('meta')
<title>LMDB - Genres</title>
</head>

<body>
  @section('content')
  <main class="container">

    <div class="pb-3 text-center">
      <h2 class="display-1">Genres</h2>
    </div>

  <!-- Display thriller movies -->
  <section class="container m-3">
    <div class="d-flex justify-content-center">
      <a class="text-decoration-none link-dark" href="/genre/thriller"><h2>Thriller</h2></a>
    </div>
    <div class="d-flex justify-content-evenly">
      <div class="row">
        @foreach ($genreThriller as $thriller)
        <div class="col-12 col-md-6 col-lg-4 d-flex justify-content-center">
          <div class="card p-1 m-2" style="width: 18rem;">
            <a href="/movie/{{ $thriller->title }}">
            <img src="{{ url('/public/Image/' .$thriller->image) }}" alt="{{ $thriller->image }}" class="card-img-top pb-1">
          </a>
          <div class="card-body" style="border: solid 0px transparent;  z-index: 0;">
            <h3 class="card-title">{{$thriller->title}}</h3>
            <span style="display: inline;"><img src="{{asset('images/Star.png')}}" alt="Star">{{ $thriller->rating }}</span>
          </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>

  <!-- Display drama movies -->
  <section class="container m-3">
    <div class="d-flex justify-content-center">
      <a class="text-decoration-none link-dark" href="/genre/drama"><h2>Drama</h2></a>
    </div>
    <div class="d-flex justify-content-evenly">
      <div class="row">
        @foreach ($genreDrama as $drama)
        <div class="col-12 col-md-6 col-lg-4 d-flex justify-content-center">
          <div class="card p-1 m-2" style="width: 18rem;">
            <a href="/movie/{{ $drama->title }}">
              <img src="{{ url('/public/Image/' .$drama->image) }}" alt="{{ $drama->image }}" class="card-img-top pb-1">
            </a>
          <div class="card-body" style="border: solid 0px transparent;  z-index: 0;">
            <h3 class="card-title">{{$drama->title}}</h3>
            <span style="display: inline;"><img src="{{asset('images/Star.png')}}" alt="Star">{{ $drama->rating }}</span><br>
          </div>
          </div>
        </div>
      @endforeach
    </div>
  </section>


  <!-- Display fantasy movies -->
  <section class="container m-3">
    <div class="d-flex justify-content-center">
      <a class="text-decoration-none link-dark" href="/genre/fantasy"><h2>Fantasy</h2></a>
    </div>
    <div class="d-flex justify-content-evenly">
      <div class="row">
        @foreach ($genreFantasy as $fantasy)
        <div class="col-12 col-md-6 col-lg-4 d-flex justify-content-center">
          <div class="card p-1 m-2" style="width: 18rem;">
            <a href="/movie/{{ $fantasy->title }}">
              <img src="{{ url('/public/Image/' .$fantasy->image) }}" alt="{{ $fantasy->image }}" class="card-img-top pb-1">
            </a>
          <div class="card-body" style="border: solid 0px transparent;  z-index: 0;">
            <h3 class="card-title">{{$fantasy->title}}</h3>
            <span style="display: inline;"><img src="{{asset('images/Star.png')}}" alt="Star">{{ $fantasy->rating }}</span><br>
          </div>
          </div>
        </div>
      @endforeach
    </div>
  </section>

  <!-- Display comedy movies -->
  <section class="container m-3">
    <div class="d-flex justify-content-center">
      <a class="text-decoration-none link-dark" href="/genre/comedy"><h2>Comedy</h2></a>
    </div>
    <div class="d-flex justify-content-evenly">
      <div class="row">
        @foreach ($genreComedy as $comedy)
        <div class="col-12 col-md-6 col-lg-4 d-flex justify-content-center">
          <div class="card p-1 m-2" style="width: 18rem;">
            <a href="/movie/{{ $comedy->title }}">
              <img src="{{ url('/public/Image/' .$comedy->image) }}" alt="{{ $comedy->image }}" class="card-img-top pb-1">
            </a>
          <div class="card-body" style="border: solid 0px transparent;  z-index: 0;">
            <h3 class="card-title">{{$fantasy->title}}</h3>
            <span style="display: inline;"><img src="{{asset('images/Star.png')}}" alt="Star">{{ $fantasy->rating }}</span><br>
          </div>
          </div>
        </div>
      @endforeach
    </div>
  </section>
  
  <!-- Display action movies -->
  <section class="container m-3">
    <div class="d-flex justify-content-center">
      <a class="text-decoration-none link-dark" href="/genre/action"><h2>Action</h2></a>
    </div>
    <div class="d-flex justify-content-evenly">
      <div class="row">
        @foreach ($genreAction as $action)
        <div class="col-12 col-md-6 col-lg-4 d-flex justify-content-center">
          <div class="card p-1 m-2" style="width: 18rem;">
            <a href="/movie/{{ $action->title }}">
              <img src="{{ url('/public/Image/' .$action->image) }}" alt="{{ $action->image }}" class="card-img-top pb-1">
            </a>
          <div class="card-body" style="border: solid 0px transparent;  z-index: 0;">
            <h3 class="card-title">{{$fantasy->title}}</h3>
            <span style="display: inline;"><img src="{{asset('images/Star.png')}}" alt="Star">{{ $fantasy->rating }}</span><br>
          </div>
          </div>
        </div>
      @endforeach
    </div>
  </section>
 
  <!-- Display romance movies -->
  <section class="container m-3">
    <div class="d-flex justify-content-center">
      <a class="text-decoration-none link-dark" href="/genre/romance"><h2>Romance</h2></a>
    </div>
    <div class="d-flex justify-content-evenly">
      <div class="row">
        @foreach ($genreRomance as $romance)
        <div class="col-12 col-md-6 col-lg-4 d-flex justify-content-center">
          <div class="card p-1 m-2" style="width: 18rem;">
            <a href="/movie/{{ $romance->title }}">
              <img src="{{ url('/public/Image/' .$romance->image) }}" alt="{{ $romance->image }}" class="card-img-top pb-1">
            </a>
          <div class="card-body" style="border: solid 0px transparent;  z-index: 0;">
            <h3 class="card-title">{{$fantasy->title}}</h3>
            <span style="display: inline;"><img src="{{asset('images/Star.png')}}" alt="Star">{{ $fantasy->rating }}</span><br>
          </div>
          </div>
        </div>
      @endforeach
    </div>
  </section>

  </main>
  @include('footer')
  @endsection
</body>

</html>