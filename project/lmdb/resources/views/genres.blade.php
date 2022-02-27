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
  <title>LMDB - Genres</title>
</head>

<body>
@section('content')
  <main>

  <section class="py-5">

  <h1>Genres</h1>
  
  <div class="container">
      <div class="d-flex justify-content-between">
  
   <a href="/genre/thriller"><h2>Thriller</h2></a>
   </div>
   <div class="row">

    @foreach ($genreThriller as $thriller)
    <div class="col-4">
      <a href="/movie/{{ $thriller->title }}"><img src="{{asset('images/LoTR 2.jpg')}}" alt="Random images" class="card-img-top"><p>{{ $thriller->title }}</p></a>
      
      <span style="display: inline;"><img src="{{asset ('images/Star.png')}}" alt="Star">{{ $thriller->rating }}</span>
      </div>
      @endforeach
        </div>
        </div>
    </div>
  </section>

  <section class="py-5">
  <div class="container">
      <div class="d-flex justify-content-between">
  
   <a href="/genre/drama"><h2>Drama</h2></a>
   </div>
   <div class="row">

    @foreach ($genreDrama as $drama)
    <div class="col-4">
      <a href="/movie/{{ $drama->title }}"><img src="{{asset('images/LoTR 2.jpg')}}" alt="Random images" class="card-img-top"><p>{{ $drama->title }}</p></a>
      
      <span style="display: inline;"><img src="{{asset ('images/Star.png')}}" alt="Star">{{ $drama->rating }}</span>
      </div>
      @endforeach
        </div>
        </div>
    </div>
  </section>

  <section class="py-5">
  <div class="container">
      <div class="d-flex justify-content-between">
  
   <a href="/genre/fantasy"><h2>Fantasy</h2></a>
   </div>
   <div class="row">

    @foreach ($genreFantasy as $fantasy)
    <div class="col-4">
      <a href="/movie/{{ $fantasy->title }}"><img src="{{asset('images/LoTR 2.jpg')}}" alt="Random images" class="card-img-top"><p>{{ $fantasy->title }}</p></a>
      
      <span style="display: inline;"><img src="{{asset ('images/Star.png')}}" alt="Star">{{ $fantasy->rating }}</span>
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

