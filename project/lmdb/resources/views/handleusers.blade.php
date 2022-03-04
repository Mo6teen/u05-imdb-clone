<!DOCTYPE html>

<html lang="en">
@include('header')
@include('meta')
<title>LMDB - Dashboard</title>
</head>

<body>
    <main class="py-5">
        <div class="container py-5 my-5">
            <div class="row justify-content-center">
                <div class="col-md-8">

                    <div class="card">
                        <div class="card-header">
                            <h2 id="handleusers" style="color: #fd7e14;">Handle users <a href="{{ url('admindashboard') }}" class="btn btn-dark float-end">BACK</a></h2>
                        </div>
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                            @endif
                        </div>

                        <!-- Table to display users -->
                        <section class="table-responsive">
                            <div class="card-body">
                                <table class="table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Role</th>
                                            <th>Created</th>
                                            <th>Update</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($users as $user)
                                        <tr>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            @if ($user->role == 0)
                                            <td>Admin</td>
                                            @elseif ($user->role == 1)
                                            <td>Regular user</td>
                                            @endif
                                            <td>{{ $user->created_at }}</td>
                                            <td><a class="btn btn-outline-warning btn-sm" href="{{ url('edit-user/' . $user->id) }}">Update user</a></td>
                                            <td><a class="btn btn-outline-danger btn-sm" href="{{ url ('admindashboard/delete/' . $user->id) }}">Delete user</a></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="py-5 my-5"></div> -->
    </main>
    @include('footer')
</body>

</html>