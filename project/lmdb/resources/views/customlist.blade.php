<!DOCTYPE html>

<html lang="en">
@include('header')
@extends('dashboard')
@include('meta')
<title>LMDB - {{ $customList->list_name }}</title>
</head>

@section('content')
<main>
    <!-- Form to add a new movie to a list -->
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h2 id="handlewatchlist" style="color: #fd7e14;">{{$customList->list_name}}
                            <a href="{{ url('customlists') }}" class="btn btn-dark float-end">BACK</a>
                        </h2>
                    </div>
                    <div class="card-body text-center">
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        @endif
                        @if (session('error'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('error') }}
                        </div>
                        @endif
                        <form action="{{ url('customlist/'.$customList->id) }}" method="POST">
                            @csrf
                            <input hidden name="customlist_id" value="{{ $customList->id }}">
                            <div class="form-group py-3 d-flex justify-content-center align-items-center">
                                <label for="addmovie">Add Movie</label>
                                <input type="text" name="movie_id" class="form-control">
                                <button type="submit" class="btn btn-success">Add</button>
                            </div>
                        </form>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>Movie title</th>
                                    <th>Genre</th>
                                    <th>Rating</th>
                                    <th>Release date</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($Movies as $movie)
                                <tr>
                                    <td><a href="{{ url('movie/' . $movie->movie->title)}}">{{ $movie->movie->title }}</a></td>
                                    <td> {{ $movie->movie->genre }}</td>
                                    <td> {{ $movie->movie->rating }}</td>
                                    <td> {{ $movie->movie->release_date }}</td>
                                    <td><a class="btn btn-danger btn-sm" href="{{ url('customlist/delete/' . $movie->id) }}">Delete</a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="py-5 my-5"></div>
    <div class="py-5 my-5"></div>
</main>
@include('footer')
@endsection
</body>

</html>