<!DOCTYPE html>

<html lang="en">
@include('header')
@extends('dashboard')
@include('meta')
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
                    <h2 id="handlereviews" style="color: #fd7e14;">Handle reviews <a href="{{ url('admindashboard') }}" class="btn btn-dark float-end">BACK</a></h2>
                    </div>
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div class="card-body">
                        @foreach($reviews as $review)
                        @if($review->approved == 0)   
                        <form class="card p-2" method="post" autocomplete="off" action="{{url('handlereviews/'.$review->id)}}">
                        @csrf
                        @method('PUT')
                            <input hidden name="id" value="{{ $review->id }}">
                            <div class="mb-3 row">
                                <label for="name" class="col-sm-2 col-form-label">Name:</label>
                            <div class="col-sm-10">
                                <input type="text" name="name" readonly class="form-control-plaintext" value="{{ $review->name }}" required="">
                            </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="title" class="col-sm-2 col-form-label">Movie:</label>
                            <div class="col-sm-10">
                                <input type="text" name="title" readonly class="form-control-plaintext" value="{{ $review->movie->title }}" required="">
                            </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="review" class="col-sm-2 col-form-label">Review:</label>
                            <div class="col-sm-10">
                                <textarea name="review" readonly class="form-control-plaintext" required="">{{ $review->review }}</textarea>
                            </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="created_at" class="col-sm-2 col-form-label">Created:</label>
                            <div class="col-sm-10">
                                <input name="created_at" readonly class="form-control-plaintext" value="{{ $review->created_at }}">
                            </div>
                            </div>
                            <div class="col-auto">
                                <button type="submit" class="btn btn-outline-success mb-3">Approve</button>
                        </form>
                                <a class="btn btn-outline-danger mb-3" href="{{ url ('handlereviews/delete/' . $review->id) }}">Delete</a>
                            </div>
                        @endif
                        @endforeach
                    </div> 
                </div>
    </main>
@include('footer')
@endsection
</body>
</html>