@include('header')
@extends('dashboard')

<!DOCTYPE html>
<html lang="en">

@include('meta')
    <title>LMDB - {{ $movie->title }}</title>
</head>

<body>
@section('content')

    <main class="container text-center">
        <div class="m-2">
            <h1 class="display-2">{{ $movie->title }}</h1>
            <a href="/genre/{{ $movie->genre }}" class="btn btn-primary btn-sm" id="btn">{{ $movie->genre }}</a>
        </div>

        <!--Image and description section-->
        <section>
            <img src="{{asset('public/Image/'.$movie->image)}}" class="img-fluid mb-3" alt="Image">
            <div class="d-flex justify-content-between mb-3">
                <span style="display: inline;"><img src="{{asset('images/Star.png')}}" alt="Star">{{ $movie->rating }}</span>
                <div class="card-body">
                    <form method="post" action="{{url('store-form')}}">
                        @csrf
                        <input hidden name="movie_id" value="{{ $movie->id }}">
                        @auth
                        <input hidden name="user_id" value="{{ Auth::user()->id }}">
                        @endauth
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">+ Watchlist</button>
                        </form>
                    </div>
                </div>
            </div>
            <div>
                <h2 class="display-6 mb-2">Description</h2>
                <p class="f2-6">{{ $movie->description }}</p>
                <p class="f2-6">{{ $movie->release_date }}</p>
        
            </div>
        </section>

        <!-- Section to write and read reviews -->
        <section>
            <div class="mb-3">
                <h2 class="card-title display-6">Reviews</h2>
                <form class="card p-2" method="post" autocomplete="off" action="{{url('reviews-form')}}">
                    @csrf
                    <input hidden name="movie_id" value="{{ $movie->id }}">
                    <div class="form-group">
                        <label>Name</label>
                        @auth
                        <input type="text" id="title" name="name" class="form-control" readonly="readonly" value="{{ Auth::user()->name }}" required="">
                        @else
                        <input type="text" id="title" name="name" class="form-control" readonly="readonly" value="You are not signed in" required="">
                        @endauth
                    </div>
                    <div class="form-group">
                        <label>Review</label>
                        <textarea name="review" class="form-control" placeholder="Write your review" required=""></textarea>
                    </div>
                    <button type="submit" class="btn btn-outline-dark m-3">Submit</button>
                </form>
            </div>

            @foreach($movie->reviews as $review)
            @if($review->approved == 1)
            <div class="card-header text-start">  
                <h3 class="h5">{{ $review->name }}</h3>
            </div>
            <div class="card-body text-start">
                <p>{{ $review->review }}</p>
                <div class="d-flex justify-content-between">
                    <p class="fs-6 fw-light">{{ $review->created_at }}</p>
                    @auth
                    @if(Auth::user()->role == 0)
                    <a class="btn btn-outline-danger btn-sm" href={{ "delete/".$review->id }}>Delete review</a>
                    @endif
                    @endauth
                </div>
            </div>
            @endif
            @endforeach
        </section>
    </main>

    @include('footer')
    @endsection
</body>
</html>