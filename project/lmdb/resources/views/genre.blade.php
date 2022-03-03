@include('header')
@extends('dashboard')

<!DOCTYPE html>
<html lang="en">

@include('meta')
  <title>LMDB - {{ $genre[0]->genre }}</title>
</head>

<body>
@section('content')
  <main>

    <section class="container m-3">
      <div class="pb-3 text-center">
        <h2 class="display-1"> {{ $genre[0]->genre }}</h2>
      </div>

      <!-- Display movies in genre -->
        <div class="row">
          @foreach ($genre as $movie)
          <div class="card p-1" style="width: 18rem;">
            <a href="/movie/{{ $movie->title }}">
              <img src="{{ url('/public/Image/' .$movie->image) }}" alt="{{ $movie->image }}" class="card-img-top pb-1">
            </a>       
              <h3 class="card-title">{{$movie->title}}</h3>
              <span style="display: inline;">
              <img src="{{asset('images/Star.png')}}" alt="Star">{{ $movie->rating }}</span>
          </div>
          @endforeach
        </div>
    </section>
    
  </main>
  @include('footer')
  @endsection
</body>
</html>

