<!DOCTYPE html>

<html lang="en">
@include('header')
@include('meta')
<title>LMDB - My settings</title>
</head>

<main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h2 id="handleotherlists" style="color: #fd7e14;">My settings
                            @if(Auth::user()->role == 1)
                            <a href="{{ url('userdashboard') }}" class="btn btn-dark float-end">BACK</a>
                        </h2>
                        @elseif(Auth::user()->role == 0)
                        <a href="{{ url('admindashboard') }}" class="btn btn-dark float-end">BACK</a></h2>
                        @endif
                    </div>
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item h5">
                                <h5>Change your registered email</h5>
                                <a class="btn btn-dark btn-sm my-3" href="{{ url('edit-email/') }}">Update email</a>
                            </li>
                            <li class="list-group-item h5 my-2">
                                <h5>Change your password</h5>
                                <a class="btn btn-dark btn-sm my-3" href="{{ url('edit-password/') }}">Change password</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-5 my-5"></div>
        <div class="py-5 my-5"></div>
</main>
@include('footer')
</body>

</html>