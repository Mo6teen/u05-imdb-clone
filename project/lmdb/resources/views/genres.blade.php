@include('header')
@extends('dashboard')

<!DOCTYPE html>
<html lang="en">

@include('meta')
<title>LMDB - Genres</title>
</head>

<body>
  @section('content')
  <main>

    <section class="py-5">

      <h1>Genres</h1>

      <div class="container">
        <div class="d-flex justify-content-between">

          <a href="/genre/thriller" class="link-dark text-decoration-none">
            <h2>Thriller</h2>
          </a>
        </div>
        <div class="row">

          @foreach ($genreThriller as $thriller)
          <div class="card col-4">
            <a href="/movie/{{ $thriller->title }}">
              <img src="{{ url('/public/Image/' .$thriller->image) }}" alt="{{ $thriller->image }}" class="card-img-top">
            </a>
            <div class="card-body" style="border: solid 0px transparent;  z-index: 0;">
              <h3 class="card-title">{{$thriller->title}}</h3>
              <span class="card-text" style="display: inline;"><img src="{{asset('images/Star.png')}}" alt="Star">{{ $thriller->rating }}</span><br>
            </div>
          </div>
          @endforeach
        </div>
      </div>
      </div>
    </section>

    <section class="py-5">
      <div class="container">
        <div class="d-flex justify-content-between">

          <a href="/genre/drama" class="link-dark text-decoration-none">
            <h2>Drama</h2>
          </a>
        </div>
        <div class="row">

          @foreach ($genreDrama as $drama)
          <div class="card col-4">
            <a href="/movie/{{ $drama->title }}">
              <img src="{{ url('/public/Image/' .$drama->image) }}" alt="{{ $drama->image }}" class="card-img-top">
            </a>
            <div class="card-body" style="border: solid 0px transparent;  z-index: 0;">
              <h3 class="card-title">{{$drama->title}}</h3>
              <span class="card-text" style="display: inline;"><img src="{{asset('images/Star.png')}}" alt="Star">{{ $drama->rating }}</span><br>
            </div>
          </div>
          @endforeach
        </div>
      </div>
      </div>
    </section>

    <section class="py-5">
      <div class="container">
        <div class="d-flex justify-content-between">

          <a href="/genre/fantasy" class="link-dark text-decoration-none">
            <h2>Fantasy</h2>
          </a>
        </div>
        <div class="row">

          @foreach ($genreFantasy as $fantasy)
          <div class="card col-4">
            <a href="/movie/{{ $fantasy->title }}">
              <img src="{{ url('/public/Image/' .$fantasy->image) }}" alt="{{ $fantasy->image }}" class="card-img-top">
            </a>
            <div class="card-body" style="border: solid 0px transparent;  z-index: 0;">
              <h3 class="card-title">{{$fantasy->title}}</h3>
              <span class="card-text" style="display: inline;"><img src="{{asset('images/Star.png')}}" alt="Star">{{ $fantasy->rating }}</span><br>
            </div>
          </div>
          @endforeach
        </div>
      </div>
      </div>
    </section>

    <section class="py-5">
      <div class="container">
        <div class="d-flex justify-content-between">

          <a href="/genre/drama" class="link-dark text-decoration-none">
            <h2>Comedy</h2>
          </a>
        </div>
        <div class="row">

          @foreach ($genreComedy as $comedy)
          <div class="card col-4">
            <a href="/movie/{{ $comedy->title }}">
              <img src="{{ url('/public/Image/' .$comedy->image) }}" alt="{{ $comedy->image }}" class="card-img-top">
            </a>
            <div class="card-body" style="border: solid 0px transparent;  z-index: 0;">
              <h3 class="card-title">{{$comedy->title}}</h3>
              <span class="card-text" style="display: inline;"><img src="{{asset('images/Star.png')}}" alt="Star">{{ $comedy->rating }}</span><br>
            </div>
          </div>
          @endforeach
        </div>
      </div>
      </div>
    </section>

    <section class="py-5">
      <div class="container">
        <div class="d-flex justify-content-between">

          <a href="/genre/drama" class="link-dark text-decoration-none">
            <h2>Action</h2>
          </a>
        </div>
        <div class="row">

          @foreach ($genreAction as $action)
          <div class="card col-4">
            <a href="/movie/{{ $action->title }}">
              <img src="{{ url('/public/Image/' .$action->image) }}" alt="{{ $action->image }}" class="card-img-top">
            </a>
            <div class="card-body" style="border: solid 0px transparent;  z-index: 0;">
              <h3 class="card-title">{{$action->title}}</h3>
              <span class="card-text" style="display: inline;"><img src="{{asset('images/Star.png')}}" alt="Star">{{ $action->rating }}</span><br>
            </div>
          </div>
          @endforeach
        </div>
      </div>
      </div>
    </section>

    <section class="py-5">
      <div class="container">
        <div class="d-flex justify-content-between">

          <a href="/genre/drama" class="link-dark text-decoration-none">
            <h2>Romance</h2>
          </a>
        </div>
        <div class="row">

          @foreach ($genreRomance as $romance)
          <div class="card col-4">
            <a href="/movie/{{ $romance->title }}">
              <img src="{{ url('/public/Image/' .$romance->image) }}" alt="{{ $romance->image }}" class="card-img-top">
            </a>
            <div class="card-body" style="border: solid 0px transparent;  z-index: 0;">
              <h3 class="card-title">{{$romance->title}}</h3>
              <span class="card-text" style="display: inline;"><img src="{{asset('images/Star.png')}}" alt="Star">{{ $romance->rating }}</span><br>
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