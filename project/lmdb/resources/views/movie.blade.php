<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ url('css/app.css') }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>LMDB - {{ $movie->title }}</title>
</head>

<body>
    @include('header')

    <main class="text-center m-3">
        <div class="ms-3">
            <h1 class="display-2">{{ $movie->title }}</h1>
            <p class="btn btn-primary " id="btn">{{ $movie->genre }}</p>
            <p><!--Add rating--></p>
        </div>

        <!--Image and description section-->
        <section>
            <img src="{{asset('images/'.$movie->image_path)}}" class="img-fluid mb-3" alt="Image">
            <div class="text-start">
                <button type="button" class="btn btn-dark mb-3">+ Watchlist</button>
            </div>
            <div>
                <h2 class="display-6 mb-2">Description</h2>
                <p class="fs-6">{{ $movie->description }}</p>
            </div>
        </section>

        <!-- Section to write and read reviews -->
        <section>
            <div class="mb-3">
                <h2 class="card-title display-6">Reviews</h2>
                <form class="card p-2" method="post" action="{{url('reviews-form')}}">
                    @csrf
                    <input hidden name="movies_id" value="{{ $movie->id }}">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" id="title" name="name" class="form-control" required="">
                    </div>
                    <div class="form-group">
                        <label>Review</label>
                        <textarea name="review" class="form-control" required=""></textarea>
                    </div>
                <button type="submit" class="btn btn-outline-dark m-3">Submit</button>
                </form>
            </div>
            
            @foreach($movie->reviews as $review)
            <div class="card-header text-start">  
                <h3 class="h5">{{ $review->name }}</h3>
            </div>
            <div class="card-body text-start">
                <p>{{ $review->review }}</p>
            </div>
            @endforeach
        </section>
    </main>

    @include('footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>