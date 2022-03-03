@include('header')
@extends('dashboard')

@include('meta')
<title>LMDB - Other lists</title>
</head>
@section('content')
<main>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header py-2">
                        <h2 id="handleotherlists" style="color: #fd7e14;">Other lists
                            @if(Auth::user()->role == 1)
                            <a href="{{ url('userdashboard') }}" class="btn btn-dark float-end">BACK</a>
                        </h2>
                        @elseif(Auth::user()->role == 0)
                        <a href="{{ url('admindashboard') }}" class="btn btn-dark float-end">BACK</a></h2>
                        @endif</h2>
                    </div>
                    <form action="{{url('lists-form')}}" method="POST">
                        @csrf
                        <div class="row m-2">
                            <input hidden name="user_id" value="{{ Auth::user()->id }}">
                            <div class="row">
                            <label for="list_name" class="col-sm-2 col-form-label">Name your list:</label>
                            <div class="col-sm-10 p-2">
                            <input type="text" name="list_name" class="form-control">
                            </div>
                            </div>
                            <div class="col-auto p-2">
                            <button type="submit" name="submit" class="btn btn-outline-warning btn-sm">Create List</button>
                            </div>
                        </div>
                    </form>

                    <ul class="list-inline">
                    @foreach($customLists as $list)
                        <li class="list-inline-item ms-3 mb-2">
                            <a href="{{ url('customlist/' . $list->list_name)}}" class="link-warning">{{ $list->list_name }}</a>
                        </li>
                    @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</main>
@include('footer')
@endsection
</body>

</html>