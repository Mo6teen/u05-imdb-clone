<!DOCTYPE html>

<html lang="en">
@include('header')
@include('meta')
<title>Edit email</title>
</head>
<main>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h2 id="handleotherlists" style="color: #fd7e14;">Update email<a href="{{ url('usersettings') }}" class="btn btn-dark float-end">BACK</a></h2>
                    </div>
                    @if (session('status'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <form action="{{ url('update-email') }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group mb-3">
                            <label for="email">Your current email</label>
                            <input type="text" name="email" value="{{ $user->email }}" class="form-control" readonly="readonly">
                        </div>
                        <div class="form-group mb-3">
                            <label for="email">New email</label>
                            <input type="text" name="email" class="form-control" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="confirm_new_email">Confirm new email</label>
                            <input type="text" name="confirm_new_email" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-success">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</main>
@include('footer')
</body>

</html>