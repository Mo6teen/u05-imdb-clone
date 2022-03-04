<!DOCTYPE html>

<html lang="en">
@include('header')
@include('meta')
<title>LMDB - Search</title>
</head>

<main>
  <section class="container py-5 my-5">
    <div class="row justify-content-center">
      <div class="card-header d-flex row justify-content-center py-3">
        <h2>Search Movie
          <a href="{{ url('/') }}" class="btn btn-dark float-end">BACK</a>
        </h2>
        <form action="{{ url('search') }}" method="get">
          <div class="row">
            <div class="form-group col">
              @csrf
              <input class="form-control" type="text" name="title" placeholder=" Search!">
            </div>
            <div class="form-group col">
              <input class="btn btn-success" type="image" class="search-button" src="{{ asset('images/search.png') }}" alt="Magnifying glass inside search box" width="80" height="38">
            </div>
          </div>
        </form>
      </div>
      <div class="d-flex justify-content-between py-3">
        <p>Showing results for "{{$_GET['title']}}" </p>
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
  </section>
</main>

@include('footer')
</body>