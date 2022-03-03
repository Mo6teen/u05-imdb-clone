<!DOCTYPE html>

<html lang="en">
@include('header')
@extends('dashboard')
@include('meta')
<title>Homepage</title>
</head>

<body>
  @section('content')
  <main>

    <section class="container d-flex justify-content-center align-items-center flex-column py-2">
      <h1 style="text-align:center;">Welcome to LMDB</h1>

      <figure>
        <img src="{{ asset('images/biglogo.png') }}" alt="LMDB Logo" class="align-center img-fluid img-thumbnail" width="400" height="400">
      </figure>

    </section>

    <!-- Browse all categories -->

    <section class="py-5">
      <div class="container">
        <div class="row text-center">
          <a href="/genres">
            <h2 class="btn btn-primary btnN">Browse All Genres</h2>
          </a>
          <div class="col-4 py-2">
            <a href="/genre/comedy" class="btn btn-primary btnN">Comedy</a>
          </div>
          <div class="col-4 py-2">
            <a href="/genre/action" class="btn btn-primary btnN">Action</a>
          </div>
          <div class="col-4 py-2">
            <a href="/genre/thriller" class="btn btn-primary btnN">Thriller</a>
          </div>
          <div class="col-4 py-2">
            <a href="/genre/drama" class="btn btn-primary btnN">Drama</a>
          </div>
          <div class="col-4 py-2">
            <a href="/genre/fantasy" class="btn btn-primary btnN">Fantasy</a>
          </div>
          <div class="col-4 py-2">
            <a href="/genre/romance" class="btn btn-primary btnN">Romance</a>
          </div>
        </div>
      </div>
    </section>


    <!-- Top Rated movies -->

    <section class="py-5">
      <div class="container">
        <div class="d-flex justify-content-between">
          <a href="/top-movies" class="link-dark text-decoration-none">
            <h2>Top Movies</h2>
          </a>
          <a href="/top-movies" class="link-dark"><span>see more...</span></a>
        </div>
        <div class="row">
          @foreach ($Movies as $movie)
          <div class="card col-4">
            <a href="/movie/{{ $movie->title }}">
              <img src="{{ url('/public/Image/' .$movie->image) }}" alt="{{ $movie->image }}" class="card-img-top">
            </a>
            <div class="card-body" style="border: solid 0px transparent;  z-index: 0;">
              <h3 class="card-title">{{$movie->title}}</h3>
              <span class="card-text" style="display: inline;"><img src="{{asset('images/Star.png')}}" alt="Star">{{ $movie->rating }}</span><br>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </section>

    <!-- Coming soon section -->

    <section class="py-5 mb-4">
      <div class="container">
        <div class="d-flex justify-content-between">
          <h2>Coming Soon</h2>
          <a href="/top-movies"><span>see more...</span></a>
        </div>
        <div class="row">
          @foreach ($moviesDate as $date)
          <div class="card col-4">
            <a href="/movie/{{ $movie->title }}">
              <img src="{{ url('/public/Image/' .$date->image) }}" alt="{{ $date->image }}" class="card-img-top">
            </a>
            <div class="card-body" style="border: solid 0px transparent;  z-index: 0;">
              <p class="card-title">{{$date->title}}</p>
              <p class="card-title">Release Date:</p>
              <p class="card-title">{{$date->release_date}}</p>
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