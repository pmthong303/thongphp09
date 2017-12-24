@extends ('admin.layouts.index')
@section('content')
    <body>
    <div class="container">
        <h2>Edit User</h2>
        <form action="{{ route('updateUser') }}" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $users->id }}">
            <div class="form-group">
                <label for="text">Name:</label>
                <input type="text" class="form-control" id="text" placeholder="Enter name" name="name" value="{{ $users->name }}">
            </div>
            <div class="form-group">
                <label for="text">Role:</label>
                <input type="text" class="form-control" id="text" placeholder="Enter role" name="role" value="{{ $users->role }}">
            </div>
            <div class="form-group">
                <label for="text">Username:</label>
                <input type="text" class="form-control" id="text" placeholder="Enter username" name="username" value="{{ $users->username }}">
            </div>
            <div class="form-group">
                <label for="text">Email:</label>
                <input type="email" class="form-control" id="text" placeholder="Enter email" name="email" value="{{ $users->email }}">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>
    </body>
@endsection

