@include('header')
@extends('dashboard')

@include('meta')
    <title>LMDB - </title>
</head>

@section('content')
<main>

<h1></h1>
@foreach ($customLists as $list)
<form action="{{ url('customlist/'.$list->id) }}" method="POST">
            @csrf
            @method('PUT')
            <input hidden name="id" value="{{ $list->id }}">
            <div class="form-group mb-3">
                <label for="name">List name</label>
                <input type="text" name="list_name" value="{{ $list->list_name }}" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="addmovie">Add Movie</label>
                <input type="text" name="movie_id" class="form-control">
            </div>
            <div class="form-group mb-3">
                <button type="submit" class="btn btn-outline-warning">Add</button>
            </div>
        </form>
@endforeach
</main>
@include('footer')
@endsection
</body>
</html>