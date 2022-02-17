@include('header')

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="{{ url('css/app.css') }}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">


  <script src="{{ url('js/script.js') }}" defer></script>
  <title>Genre</title>
</head>

<body>
  <main>

    <section>
      <h1>Genres</h1>              
    </section>

    <section>
      <a href=""><h3>Drama</h3></a>
    </section>
    <section>

    @foreach ($movies as $movie)
<!--           <img src="{{ asset('images/LoTR 1.jpg') }}" alt="..." class="card-img-top"> -->
          <div class="card-body">
            <h5 class="card-title">Lord of the rings</h5>
            <p class="card-text">This movies is awsome!</p>
          </div>
          @endforeach

    </section>

    <section>
      <a href=""><h3>Comedy</h3></a>
    </section>

    <section>
      <a href=""><h3>Horror</h3></a>
    </section>

    <section>
      <a href=""><h3>Fantasy</h3></a>
    </section>

    <section>
      <a href=""><h2>Modern</h2></a>
    </section>
    
  </main>
</body>

</html>

@include('footer')