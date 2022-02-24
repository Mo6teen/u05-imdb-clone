@include('header')
@extends('dashboard')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ url('css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">


  <script src="{{ url('js/script.js') }}" defer></script>
  <title>LMDB - Dashboard</title>
</head>
<body>
@section('content')
<main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h1 style="color: #fd7e14;">Hi {{ Auth::user()->name }}</h1>
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h4 class="card-title dashboard-title">Welcome to your dashboard</h4>
                    <h5 class="card-subtitle">You are signed in as admin</h5>
                    <div class="card-body">
                        <h5 class="card-title">Here you can:</h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <a class="link-dark" href="#handleusers">Handle users</a>
                        </li>
                        <li class="list-group-item">
                            <a class="link-dark" href="#handlemovies">Handle movies</a>
                        </li>
                        <li class="list-group-item">
                            <a class="link-dark" href="#handlereviews">Handle reviews</a>
                        </li>
                    </ul>
            </div>
            <div class="card">
                <div class="card-header">
                    <h2 id="handleusers" style="color: #fd7e14;">Handle users</h2>
                    </div>
                <div class="card-body">
                    @csrf
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Created</th>
                                <th>Update</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)   
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->role }}</td>
                                <td>{{ $user->created_at }}</td>
                                <td><a class="btn btn-outline-warning btn-sm" href={{ "edit-user/".$user->id }}>Update user</a></td>
                                <td><a class="btn btn-outline-danger btn-sm" href={{ "admindashboard/delete/".$user->id }}>Delete user</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
                <div class="card">
                    <div class="card-header">
                        <h2 id="handlemovies" style="color: #fd7e14;">Handle movies</h2>
                        <h5 class="card-title text-center">Create Movie</h5>
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
                    <div class="card">
                        <div class="card-header">
                            <h2 id="handlereviews" style="color: #fd7e14;">Handle reviews</h2>
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