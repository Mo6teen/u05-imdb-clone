<!DOCTYPE html>

<html lang="en">
@include('header')
@include('meta')
<title>LMDB - Genres</title>
</head>

<body>
  <main class="container my-5">

    <div class="pb-3 text-center">
      <h2 class="display-1">Genres</h2>
    </div>

    <!-- Display thriller movies -->
    <section class="container my-5">
      <div class="d-flex justify-content-center py-2">
        <a class="btn btn-dark" href="/genre/thriller">
          <h2>Thriller</h2>
        </a>
      </div>
      <div class="d-flex justify-content-evenly">
        <div class="row">
          @foreach ($genreThriller as $thriller)
          <div class="col-12 col-md-6 col-lg-4 d-flex justify-content-center">
            <div class="card p-1 m-2" style="width: 350px">
              <a href=" /movie/{{ $thriller->title }}">
                <img src="{{ url('/public/Image/' .$thriller->image) }}" alt="{{ $thriller->image }}" class="card-img-top pb-1" style="height: 450px;">
              </a>
              <!-- <div class="card-body"> -->
              <h3 class="card-title">{{$thriller->title}}</h3>
              <span style="display: inline;"><img src="{{asset('images/Star.png')}}" alt="Star">{{ $thriller->rating }}</span>
              <!-- </div> -->
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </section>

    <!-- Display drama movies -->
    <section class="container my-5">
      <div class="d-flex justify-content-center py-2">
        <a class="btn btn-dark" href="/genre/drama">
          <h2>Drama</h2>
        </a>
      </div>
      <div class="d-flex justify-content-evenly">
        <div class="row">
          @foreach ($genreDrama as $drama)
          <div class="col-12 col-md-6 col-lg-4 d-flex justify-content-center">
            <div class="card p-1 m-2" style="width: 350px">
              <a href="/movie/{{ $drama->title }}">
                <img src="{{ url('/public/Image/' .$drama->image) }}" alt="{{ $drama->image }}" class="card-img-top" style="height: 450px;">
              </a>
              <div class="card-body">
                <h3 class="card-title">{{$drama->title}}</h3>
                <span style="display: inline;"><img src="{{asset('images/Star.png')}}" alt="Star">{{ $drama->rating }}</span><br>
              </div>
            </div>
          </div>
          @endforeach
        </div>
    </section>


    <!-- Display fantasy movies -->
    <section class="container my-5">
      <div class="d-flex justify-content-center py-2">
        <a class="btn btn-dark" href="/genre/fantasy">
          <h2>Fantasy</h2>
        </a>
      </div>
      <div class="d-flex justify-content-evenly">
        <div class="row">
          @foreach ($genreFantasy as $fantasy)
          <div class="col-12 col-md-6 col-lg-4 d-flex justify-content-center">
            <div class="card p-1 m-2" style="width: 350px">
              <a href="/movie/{{ $fantasy->title }}">
                <img src="{{ url('/public/Image/' .$fantasy->image) }}" alt="{{ $fantasy->image }}" class="card-img-top pb-1" style="height: 450px;">
              </a>
              <div class="card-body">
                <h3 class="card-title">{{$fantasy->title}}</h3>
                <span style="display: inline;"><img src="{{asset('images/Star.png')}}" alt="Star">{{ $fantasy->rating }}</span><br>
              </div>
            </div>
          </div>
          @endforeach
        </div>
    </section>

    <!-- Display comedy movies -->
    <section class="container my-5">
      <div class="d-flex justify-content-center py-2">
        <a class="btn btn-dark" href="/genre/comedy">
          <h2>Comedy</h2>
        </a>
      </div>
      <div class="d-flex justify-content-evenly">
        <div class="row">
          @foreach ($genreComedy as $comedy)
          <div class="col-12 col-md-6 col-lg-4 d-flex justify-content-center">
            <div class="card p-1 m-2" style="width: 350px">
              <a href="/movie/{{ $comedy->title }}">
                <img src="{{ url('/public/Image/' .$comedy->image) }}" alt="{{ $comedy->image }}" class="card-img-top pb-1" style="height: 450px;">
              </a>
              <div class="card-body">
                <h3 class="card-title">{{$comedy->title}}</h3>
                <span style="display: inline;"><img src="{{asset('images/Star.png')}}" alt="Star">{{ $comedy->rating }}</span><br>
              </div>
            </div>
          </div>
          @endforeach
        </div>
    </section>

    <!-- Display action movies -->
    <section class="container my-5">
      <div class="d-flex justify-content-center py-2">
        <a class="btn btn-dark" href="/genre/action">
          <h2>Action</h2>
        </a>
      </div>
      <div class="d-flex justify-content-evenly">
        <div class="row">
          @foreach ($genreAction as $action)
          <div class="col-12 col-md-6 col-lg-4 d-flex justify-content-center">
            <div class="card p-1 m-2" style="width: 350px;">
              <a href="/movie/{{ $action->title }}">
                <img src="{{ url('/public/Image/' .$action->image) }}" alt="{{ $action->image }}" class="card-img-top pb-1" style="height: 450px;">
              </a>
              <div class="card-body">
                <h3 class="card-title">{{$action->title}}</h3>
                <span style="display: inline;"><img src="{{asset('images/Star.png')}}" alt="Star">{{ $action->rating }}</span><br>
              </div>
            </div>
          </div>
          @endforeach
        </div>
    </section>

    <!-- Display romance movies -->
    <section class="container my-5">
      <div class="d-flex justify-content-center py-2">
        <a class="btn btn-dark" href="/genre/romance">
          <h2>Romance</h2>
        </a>
      </div>
      <div class="d-flex justify-content-evenly">
        <div class="row">
          @foreach ($genreRomance as $romance)
          <div class="col-12 col-md-6 col-lg-4 d-flex justify-content-center">
            <div class="card p-1 m-2" style="width: 350px;">
              <a href="/movie/{{ $romance->title }}">
                <img src="{{ url('/public/Image/' .$romance->image) }}" alt="{{ $romance->image }}" class="card-img-top pb-1" style="height: 450px;">
              </a>
              <div class="card-body">
                <h3 class="card-title">{{$romance->title}}</h3>
                <span style="display: inline;"><img src="{{asset('images/Star.png')}}" alt="Star">{{ $romance->rating }}</span><br>
              </div>
            </div>
          </div>
          @endforeach
        </div>
    </section>

  </main>
  <div class="py-5"></div>
  <div class="py-5"></div>
  @include('footer')
</body>

</html>