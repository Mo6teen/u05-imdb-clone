@include('header')
@extends('dashboard')

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ url('css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">


    <script src="{{ url('js/script.js') }}" defer></script>
    <title>Dashboard</title>
</head>
@section('content')
<main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                
                <div class="card">
                    <div class="card-header">
                          <h2 id="handleotherlists" style="color: #fd7e14;">Change password <a href="{{ url('usersettings') }}" class="btn btn-dark float-end">BACK</a></h2>
                    </div>
                    <div class="card-body">
                         <h5 class="card-title"></h5>
                    </div>
                        <form action="{{ url('update-password') }}" method="POST">
                            @csrf
                            @method('PUT')
                            
                            <div class="form-group mb-3">
                                <label for="current_password">Your current password</label>
                                <input type="password" name="current_password" class="form-control @error('current_password') is-invalid @enderror" required>
                                @error('current_password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                   
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="new_password">New password</label>
                                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" required>
                                @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                   
                                @enderror
                            </div>
                     
                            <div class="form-group mb-3">
                                <label for="confirm_password">Confirm new password</label>
                                <input type="password" name="confirm_password" class="form-control @error('confirm_password') is-invalid @enderror" required>
                                @error('confirm_password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                   
                                @enderror
                            </div> 
                            <div class="form-group mb-3">
                                <button type="submit" class="btn btn-outline-warning">Update</button>
                            </div>
                        </form>
                   </div>     
            </div>
        </div>
</main>
@include('footer')
@endsection
</body>
</html>