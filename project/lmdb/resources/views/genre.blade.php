<!DOCTYPE html>

<html lang="en">
@include('header')
@include('meta')
<title>LMDB - {{ $genre[0]->genre }}</title>
</head>

<body>
  <main>

    <section class="container">
      <div class="pb-3 text-center">
        <h2 class="display-1"> {{ $genre[0]->genre }}</h2>
      </div>

      <!-- Display movies in genre -->
      <div class="d-flex justify-content-evenly">
        <div class="row">
          @foreach ($genre as $movie)
          <div class="col-12 col-md-6 col-lg-4 d-flex justify-content-center">
            <div class="card p-1 m-2" style="width:350px">
              <a href="/movie/{{ $movie->title }}">
                <img src="{{ url('/public/Image/' .$movie->image) }}" alt="{{ $movie->image }}" class="card-img-top pb-1" style="height: 450px;">
              </a>
              <h3 class="card-title">{{$movie->title}}</h3>
              <span style="display: inline;">
                <img src="{{asset('images/Star.png')}}" alt="Star">{{ $movie->rating }}</span>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </section>

  </main>
  @include('footer')
</body>

</html>