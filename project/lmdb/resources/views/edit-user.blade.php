<!DOCTYPE html>

<html lang="en">
@include('header')
@extends('dashboard')
@include('meta')
  <title>LMDB - Edit user</title>
</head>

<body>
@section('content')
<main>
    <div class="container">
     <div class="card-header">
         <h2>Edit user role
            <a href="{{ url('handleusers') }}" class="btn btn-dark float-end">BACK</a>
        </h2>
    </div>
    
    <!-- Form to edit the users role to or from admin -->
    <div class="card-body">
        <form action="{{ url('edit-user/'.$user->id) }}" method="POST">
            @csrf
            @method('PUT')
            <input hidden name="id" value="{{ $user->id }}">
            <div class="mb-3 row">
                <label for="name" class="col-sm-2 col-form-label">Name:</label>
            <div class="col-sm-10">
                <input type="text" name="name" readonly class="form-control-plaintext" value="{{ $user->name }}">
            </div>
            </div>
            <div class="mb-3 row">
                <label for="email" class="col-sm-2 col-form-label">Email:</label>
            <div class="col-sm-10">
                <input type="text" name="email" readonly class="form-control-plaintext" value="{{ $user->email }}">
            </div>
            </div>
            <div class="mb-3 row">
                <label for="role" class="col-sm-2 col-form-label">Role:</label>
            <div class="col-sm-10">
                <select name="role" value="{{ $user->role }}" class="form-select">
                    <option value="0" {{ $user->role == '0' ? 'selected':'' }}>Admin</option>
                    <option value="1" {{ $user->role == '1' ? 'selected':'' }}>Regular user</option>
                </select>
            </div>
            </div>
            <div class="mb-3 row">
                <label for="created_at" class="col-sm-2 col-form-label">User created:</label>
            <div class="col-sm-10">
                <input type="text" name="created_at" readonly class="form-control-plaintext" value="{{ $user->created_at }}">
            </div> 

            <div class="col-auto">
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