@include('header')
@extends('dashboard')

<!DOCTYPE html>
<html lang="en">

<@include('meta')
  <title>Top-Rated</title>
</head>

<body>
@section('content')
  <main>
    <section class="py-5">
      <div class="container">
        <div class="d-flex justify-content-between">
          <h2>Top Movies</h2>
        </div>
        <div class="row">
          @foreach ($movies as $movie)
          <div class="col-4 col-md-3 col-lg-3">
            <img src="{{asset('images/LoTR 2.jpg')}}" alt="Random images" class="card-img-top">
            <div style="border: solid 0px transparent;  z-index: 0;">
              <p>{{$movie->title}}</p>
              <span style="display: inline;"><img src="{{asset('images/Star.png')}}" alt="Star">{{ $movie->rating }}</span>
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