@include('header')
@extends('dashboard')

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="{{ url('css/app.css') }}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">


  <script src="{{ url('js/script.js') }}" defer></script>
  <title>LMDB - Dashboard</title>
</head>

<body>
  @section('content')
  <main>
    <section class="py-5">
      <div class="container">
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