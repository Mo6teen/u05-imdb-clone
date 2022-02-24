@include('header')
@extends('dashboard')

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="{{ url('css/app.css') }}">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Homepage</title>
</head>

<body>
  @section('content')
  <main>

    <section class="intro py-5">
      <h1 style="text-align:center;">Welcome to LMDB</h1>
      <div class="py-3">
        <a href="#" class="btn btn-primary" id="btn" style="text-align: center;"> Top News </a>
      </div>
    </section>

    <!-- Brows all categorys -->

    <section class="py-5">
      <div class="container">
        <div class="row text-center">
          <a href="/genres">
            <h2 class="btn btn-primary " id="btn">Browse All Genres</h2>
          </a>
          <div class="col-4 py-2">
            <a href="/genre/comedy" class="btn btn-primary " id="btn">Comedy</a>
          </div>
          <div class="col-4 py-2">
            <a href="/genre/action" class="btn btn-primary " id="btn">Action</a>
          </div>
          <div class="col-4 py-2">
            <a href="/genre/thriller" class="btn btn-primary " id="btn">Thriller</a>
          </div>
          <div class="col-4 py-2">
            <a href="/genre/drama" class="btn btn-primary " id="btn">Drama</a>
          </div>
          <div class="col-4 py-2">
            <a href="/genre/fantasy" class="btn btn-primary " id="btn">Fantasy</a>
          </div>
          <div class="col-4 py-2">
            <a href="/genre/romance" class="btn btn-primary " id="btn">Romance</a>
          </div>
        </div>
      </div>
    </section>


    <!-- Top Rated movies -->

    <section class="py-5">
      <div class="container">
        <div class="d-flex justify-content-between">
          <a href="/top-movies" class="link-dark">
            <h2>Top Movies</h2>
          </a>
          <a href="/top-movies" class="link-dark"><span>see more...</span></a>
        </div>
        <div class="row">
          @foreach ($Movies as $movie)
          <div class="col-4">
            <a href="/movie/{{ $movie->title }}">
              <img src="{{ url('/public/Image/' .$movie->image) }}" alt="{{ $movie->image }}" class="card-img-top">
            </a>
            <div style="border: solid 0px transparent;  z-index: 0;">
              <span style="display: inline;"><img src="{{asset('images/Star.png')}}" alt="Star">{{ $movie->rating }}</span>
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
          @foreach ($Movies as $movie)
          <div class="col-4">
            <img src="{{asset('images/LoTR 2.jpg')}}" alt="Random images" class="card-img-top">
          </div>
          @endforeach
        </div>
      </div>
    </section>

  </main>

  <footer class="footer">
    <figure>
      <a href="#"><img src="{{ asset('images/facebook.png') }}" alt="facebook logo"></a>
      <a href="#"><img src="{{ asset('images/instagram.png') }}" alt="instagram logo"></a>
      <a href="#"><img src="{{ asset('images/youtube.png') }}" alt="youtube logo"></a>
      <a href="#"><img src="{{ asset('images/twitter.png') }}" alt="twitter logo"></a>
    </figure>

    <p><span>&copy;</span> by The Hounting Lobsters</p>

  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>
@endsection