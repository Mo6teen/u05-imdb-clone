<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="{{ url('css/app.css') }}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/887db6a8cd.js" crossorigin="anonymous" d></script>
  <script src="{{ url('js/script.js') }}" defer></script>
  <title>Homepage</title>
</head>

<body>
  <nav>
    <div class="navbar">
      <div class="wrapper nav-container">
        <input class="checkbox" type="checkbox" name="" id="" />
        <div class="hamburger-lines">
          <span class="line line1"></span>
          <span class="line line2"></span>
          <span class="line line3"></span>
        </div>
        <div class="name-logo">
          <h1>LMDB</h1>
        </div>
        <div class="logo">
          <img src="{{ asset('images/LMDB_Logo.png') }}" alt="LMDB Logo" id="logo" />
        </div>
        <div class="menu-items">
          <div class="search-box-desktop">
            <input class="search-txt" type="text" placeholder=" Search!">
            <img class="search-button" src="{{ asset('images/search.png') }}" alt="Magnifying glass inside search box">
          </div>
          <li><a href="#" class="nav-link">News</a></li>
          <li><a href="#" class="nav-link">Browse Categorys</a></li>
          <li><a href="#" class="nav-link">Top Rated</a></li>
          <li><a href="#" class="nav-link">Coming Soon</a></li>
          <li><a href="/login" class="nav-link">Signin/Register</a></li>
        </div>
      </div>
    </div>
  </nav>

  <main>
    <section class="py-5">
      <div class="container">
        <div class="row">
          @foreach ($Movies as $movie)
          <div class="col-5">
            <div class="card">
              <img src="{{asset('images/LoTR 1.jpg')}}" alt="Random images" class="card-img-top">
              <div class="card-body">
                <h5 class="card-title">{{ $movie -> title }}</h5>
                <!-- <p class="card-text">{{ $movie -> description }}</p> -->
              </div>
            </div>
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

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>