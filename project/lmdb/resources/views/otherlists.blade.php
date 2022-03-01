@include('header')
@extends('dashboard')

@include('meta')
    <title>Dashboard</title>
</head>
@section('content')
<main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                
                <div class="card">
                    <div class="card-header">
                          <h2 id="handleotherlists" style="color: #fd7e14;">Other lists
                          @if(Auth::user()->role == 1)
                          <a href="{{ url('userdashboard') }}" class="btn btn-dark float-end">BACK</a></h2>
                          @elseif(Auth::user()->role == 0)
                          <a href="{{ url('admindashboard') }}" class="btn btn-dark float-end">BACK</a></h2>
                          @endif</h2>
                    </div>
                    <div class="card-body">
                         <h5 class="card-title"></h5>
                    </div>
                </div>     
            </div>
        </div>
</main>
@include('footer')
@endsection
</body>
</html>