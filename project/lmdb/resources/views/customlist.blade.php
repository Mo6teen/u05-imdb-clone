@include('header')
@extends('dashboard')

@include('meta')
<title>LMDB - </title>
</head>

@section('content')
<main>

    <h1></h1>

    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif

    <h2>{{$customList->list_name}}</h2>
    <form action="{{ url('customlist/'.$customList->id) }}" method="POST">
        @csrf
        <input hidden name="customlist_id" value="{{ $customList->id }}">
        <div class="form-group mb-3">
            <label for="addmovie">Add Movie</label>
            <input type="text" name="movie_id" class="form-control">
        </div>
        <div class="form-group mb-3">
            <button type="submit" class="btn btn-outline-warning">Add</button>
        </div>
    </form>


    <div class="container py-5">
        @foreach($Movies as $movie)

        <h1>{{$movie->movie->title}}</h1>


        @endforeach
    </div>
</main>
@include('footer')
@endsection
</body>

</html>