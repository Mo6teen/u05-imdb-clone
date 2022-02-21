@include('header')

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


    <main>
        <div>
            <h1 class="display-3">{{ $movie->title }}</h1>
            <p class="btn btn-primary " id="btn">{{ $movie->genre }}</p>
            <p><!--Add rating--></p>
        </div>

        <!--Image and description section-->
        <section>
            <img src="{{asset('images/'.$movie->image_path)}}" class="img-fluid w-25 p-3" alt="Image">
            <div>
                <button type="button" class="btn btn-dark">+ Watchlist</button>
            </div>
            <div>
                <h2 class="display-6">Description</h2>
                <p class="fs-6">{{ $movie->description }}</p>
            </div>
        </section>

        <!-- Section to write and read reviews -->
        <section>
            <div class="card">
                <h2 class="card-title display-6">Reviews</h2>
                <form method="post" action="{{url('reviews-form')}}">
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
                <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            
            <div class="card-header text-center">  
            @foreach($movie->reviews as $review)
                {{ $review->name }}
            </div>
            <div class="card-body">
                {{ $review->review }}
            </div>
                @endforeach
        </section>
    </main>

    @include('footer')
</body>
</html>