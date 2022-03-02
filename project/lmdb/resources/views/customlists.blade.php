@include('header')
@extends('dashboard')

@include('meta')
<title>Dashboard</title>
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
                        <div class="form-group py-3 d-flex justify-content-center align-items-center">
                            <input hidden name="user_id" value="{{ Auth::user()->id }}">
                            <label for="list_name" class="mx-3">Name your list:</label>
                            <input type="text" name="list_name">
                            <button type="submit" name="submit" class="btn btn-outline-warning btn-sm mx-3">Create List</button>
                        </div>
                    </form>

                    @foreach($customLists as $list)
                    <div class="d-flex justify-content-center">
                        <h3><a href="{{ url('customlist/' . $list->list_name)}}" class="link-warning">{{ $list->list_name }}</a></h3>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
</main>
@include('footer')
@endsection
</body>

</html>