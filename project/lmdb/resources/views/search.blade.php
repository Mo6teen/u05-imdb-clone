@include('header')
@extends('dashboard')

<!DOCTYPE html>
<html lang="en">

@include('meta')
  <title>LMDB - Dashboard</title>
</head>

<body>
  @section('content')
  <main>
    <section class="py-5">
      <div class="container">
        <div class="row">
          <div class="d-flex justify-content-between">
            <h2>You searched for {{$_GET['title']}} </h2>
          </div>
          @foreach ($movies as $movie)
          <div class="col-4 col-md-3 col-lg-3">
            <a href="/movie/{{ $movie->title }}">
              <img src="{{url('/public/Image/' .$movie->image)}}" alt="Movie Thumbnail" class="card-img-top"></a>
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