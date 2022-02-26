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
                                <td><a class="btn btn-outline-warning btn-sm" href="{{ url('edit-user/' . $user->id) }}">Update user</a></td>
                                <td><a class="btn btn-outline-danger btn-sm" href="{{ url ('admindashboard/delete/' . $user->id) }}">Delete user</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div> 
        </div>
</main>
@include('footer')
@endsection
</body>