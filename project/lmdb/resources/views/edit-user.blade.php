@extends('dashboard')
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
  <title>LMDB - Edit user</title>
</head>

<body>
@section('content')
<main>
    <div class="container">
     <div class="card-header">
         <h2>Edit user role
            <a href="{{ url('admindashboard') }}" class="btn btn-dark float-end">BACK</a>
        </h2>
    </div>

    <div class="card-body">
        <form action="{{ url('update-user/'.$user->id) }}" method="POST">
            @csrf
            @method('PUT')
            <input hidden name="id" value="{{ $user->id }}">
            <div class="form-group mb-3">
                <label for="name">Name</label>
                <input type="text" name="name" value="{{ $user->name }}" class="form-control" readonly="readonly">
            </div>
            <div class="form-group mb-3">
                <label for="email">Email</label>
                <input type="text" name="email" value="{{ $user->email }}" class="form-control" readonly="readonly">
            </div>
            <div class="form-group mb-3">
                <label for="role">Role</label>
                <select name="role" value="{{ $user->role }}" class="form-select">
                    <option value="0" {{ $user->role == '0' ? 'selected':'' }}>0</option>
                    <option value="1" {{ $user->role == '1' ? 'selected':'' }}>1</option>
                </select>
            </div>
            <div class="form-group mb-3">
                <label for="created_at">Created</label>
                <input type="text" name="created_at" value="{{ $user->created_at }}" class="form-control" readonly="readonly">
            </div> 
            <div class="form-group mb-3">
                <button type="submit" class="btn btn-outline-warning">Update</button>
            </div>
        </form>
        
    </div>
    </div>
</main>
@include('footer')
@endsection
</body>
</html>