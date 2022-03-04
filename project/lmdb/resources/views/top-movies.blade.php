<!DOCTYPE html>

<html lang="en">
@include('header')
@include('meta')
<title>LMDB - Top Rated Movies</title>
</head>

<main>

  <section class="container py-5 my-3">
    <div class="pb-3 text-center">
      <h2 class="display-1">Top Rated Movies</h2>
    </div>
    <div class="d-flex justify-content-evenly">
      <div class="row">
        @foreach ($movies as $movie)
        <div class="col-12 col-md-6 col-lg-4 d-flex justify-content-center">
          <div class="card p-1 m-2" style="width:350px">
            <a href="/movie/{{ $movie->title }}">
              <img src="{{ url('/public/Image/' .$movie->image) }}" alt="{{ $movie->image }}" class="card-img-top" style="height: 450px;">
            </a>
            <p class="card-title">{{$movie->title}}</p>
            <span style="display: inline;"><img src="{{asset('images/Star.png')}}" alt="Star">{{ $movie->rating }}</span>
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