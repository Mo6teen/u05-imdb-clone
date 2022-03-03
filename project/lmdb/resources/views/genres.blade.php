@include('header')
@extends('dashboard')

<!DOCTYPE html>
<html lang="en">

<@include('meta') <title>LMDB - Genres</title>
  </head>

  <body>
    @section('content')
    <main>

      <section class="py-5">

        <h2>Genres</h2>

        <div class="container">
          <div class="d-flex justify-content-between">

            <a href="/genre/thriller">
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

            <a href="/genre/drama">
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

            <a href="/genre/fantasy">
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

    </main>
    @include('footer')
    @endsection
  </body>

</html>