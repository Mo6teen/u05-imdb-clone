<!DOCTYPE html>

<html lang="en">
@include('header')
@extends('dashboard')
@include('meta')
<title>Homepage</title>
</head>

<body>
  @section('content')
  <main class="container">
    <section class="d-flex justify-content-center align-items-center flex-column">
      <h1 style="text-align:center;">Welcome to LMDB</h1>
      <figure>
        <img src="{{ asset('images/biglogo.png') }}" alt="LMDB Logo" class="align-center img-fluid" width="300" height="auto">
      </figure>
    </section>

    <!-- Browse genres -->
    <section class="pb-5">
      <div class="container">
        <div class="row text-center">
          <a href="/genres">
            <h2 class="btn btn-dark">Browse All Genres</h2>
          </a>
          <div class="col-4 py-2">
            <a href="/genre/comedy" class="btn btn-dark">Comedy</a>
          </div>
          <div class="col-4 py-2">
            <a href="/genre/action" class="btn btn-dark">Action</a>
          </div>
          <div class="col-4 py-2">
            <a href="/genre/thriller" class="btn btn-dark">Thriller</a>
          </div>
          <div class="col-4 py-2">
            <a href="/genre/drama" class="btn btn-dark">Drama</a>
          </div>
          <div class="col-4 py-2">
            <a href="/genre/fantasy" class="btn btn-dark">Fantasy</a>
          </div>
          <div class="col-4 py-2">
            <a href="/genre/romance" class="btn btn-dark">Romance</a>
          </div>
        </div>
      </div>
    </section>


    <!-- Top Rated movies -->
    <section class="container mt-5">
      <div class="d-flex justify-content-between">
        <a href="/top-movies" class="link-dark text-decoration-none">
          <h2>Top Movies</h2>
        </a>
        <a href="/top-movies" class="link-dark"><span>see more...</span></a>
      </div>
      <div class="d-flex justify-content-evenly">
        <div class="row">
          @foreach ($Movies as $movie)
          <div class="col-12 col-md-6 col-lg-4 d-flex justify-content-center">
            <div class="card p-1 m-2" style="width: 18rem;">
              <a href="/movie/{{ $movie->title }}">
                <img src="{{ url('/public/Image/' .$movie->image) }}" alt="{{ $movie->image }}" class="card-img-top pb-1">
              </a>
              <h3 class="card-title">{{$movie->title}}</h3>
              <span style="display: inline;">
                <img src="{{asset('images/Star.png')}}" alt="Star">{{ $movie->rating }}</span>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </section>

    <!-- Coming soon section -->
    <section class="container mt-5">
      <div class="d-flex justify-content-between">
        <h2>Coming Soon</h2>
        <a href="#" class="link-dark"><span>see more...</span></a>
      </div>
      <div class="d-flex justify-content-evenly">
        <div class="row">
          @foreach ($moviesDate as $date)
          <div class="col-12 col-md-6 col-lg-4 d-flex justify-content-center">
            <div class="card p-1 m-2" style="width: 18rem;">
              <a href="/movie/{{ $movie->title }}">
                <img src="{{ url('/public/Image/' .$date->image) }}" alt="{{ $date->image }}" class="card-img-top">
              </a>
              <div class="card-body" style="border: solid 0px transparent;  z-index: 0;">
                <p class="card-title">{{$date->title}}</p>
                <p class="card-title">Release Date:</p>
                <p class="card-title">{{$date->release_date}}</p>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </section>




  </main>
  @include('footer')
  @endsection
</body>

</html>