<!DOCTYPE html>

<html lang="en">
@include('header')
@extends('dashboard')
@include('meta')
<title>LMDB - Top Rated Movies</title>
</head>

@section('content')
<<<<<<< HEAD
<main>
  <section class="container py-6">
    <div class="d-flex justify-content-between">
      <h1>Top Rated Movies</h1>
    </div>
    <div class="row">
      @foreach ($movies as $movie)
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
=======
  <main>

  <section class="container">
      <div class="pb-3 text-center">
        <h2 class="display-1">Top Rated Movies</h2>
      </div>


    <div class="d-flex justify-content-evenly">
      <div class="row">
        @foreach ($movies as $movie)
        <div class="col-12 col-md-6 col-lg-4 d-flex justify-content-center">
          <div class="card p-1 m-2" style="width: 18rem;">
            <a href="/movie/{{ $movie->title }}">
              <img src="{{ url('/public/Image/' .$movie->image) }}" alt="{{ $movie->image }}" class="card-img-top">
            </a>
              <h3 class="card-title">{{$movie->title}}</h3>
              <span style="display: inline;"><img src="{{asset('images/Star.png')}}" alt="Star">{{ $movie->rating }}</span>
            </div>
          </div>
        @endforeach
        </div>
      </div>
>>>>>>> main
  </section>
</main>
@include('footer')
@endsection
</body>
<<<<<<< HEAD

</html>
=======
</html>


>>>>>>> main
