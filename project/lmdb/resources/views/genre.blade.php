<!DOCTYPE html>

<html lang="en">
@include('header')
@extends('dashboard')
@include('meta')
<title>LMDB - {{ $genre[0]->genre }}</title>
</head>

<body>
  @section('content')
  <main>

    <section class="py-5">

      <h2> {{ $genre[0]->genre }}</h2>

      <div class="container">
        <div class="d-flex justify-content-between">

        </div>
        <div class="row">

          @foreach ($genre as $movie)
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
      </div>
    </section>
  </main>
  @include('footer')
  @endsection
</body>

</html>