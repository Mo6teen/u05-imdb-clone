<!DOCTYPE html>

<html lang="en">
@include('header')
@extends('dashboard')
@include('meta')
  <title>Create movie</title>
</head>
<body>
@section('content')
<main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8"><div class="card">
                    <div class="card-header">
                        <h2 id="handlemovies" style="color: #fd7e14;">Handle movies <a href="{{ url('admindashboard') }}" class="btn btn-dark float-end">BACK</a></h2>
                        <h5 class="card-title text-center">Create Movie</h5>
                        <div class="card-body">
                            @if (session('status'))
                            <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                            </div>
                            @endif
                            <form action="{{ url('/save') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group py-2">
                                    <label for="title-create">Movie Title</label><br>
                                    <input type="text" name="title" id="title-crate" placeholder="Add title for the movie">
                                </div>
                                <div class="form-group py-3">
                                    <label for="description">Movie description</label><br>
                                    <textarea name="description" id="description" cols="50" rows="4"></textarea>
                                </div>
                                <div class="form-group py-3">
                                    <label for="genre">genre</label><br>
                                    <input type="text" id="genre" name="genre">
                                </div>
                                <div class="form-group py-3">
                                    <label for="release_date">Release date</label><br>
                                    <input type="date" id="release_date" name="release_date" value="2022-02-23" min="2022-01-01" max="2024-12-31">
                                </div>
                                <div class="form-group py-3">
                                    <label for="rating">Rating: 1-5</label>
                                    <input type="number" id="rating" name="rating" min="1" max="5">
                                </div>
                                <div class="form-group py-3">
                                    <label for="image">Add a movie thumbnail</label><br>
                                    <input type="file" class="form-control-file" name="image" id="image">
                                </div>
                                <div class="form-group py-3">
                                    <input type="submit" name="submit" id="submit">
                                </div>
                            </form>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</main>
@include('footer')
@endsection
</body>
</html>