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
                          <h2 id="handleotherlists" style="color: #fd7e14;">My settings</h2>
                    </div>
                    <div class="card-body">
                         <h5 class="card-title"></h5>
                         <a class="btn btn-outline-warning btn-sm" href="{{ url('edit-email/') }}">Update email</a>
                         <a class="btn btn-outline-warning btn-sm" href="{{ url('edit-password/') }}">Change password</a>
                    </div>
                </div>     
            </div>
        </div>
</main>
@include('footer')
@endsection
</body>
</html>