@extends ('admin.layouts.index')
@section('content')
    <body>

    <div class="container">
        <h2>Create User</h2>
        <form action="" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="text">Name:</label>
                <input type="text" class="form-control" id="text" placeholder="Enter name" name="name">
                <br>
                @if ($errors->has('name'))
                    <div class="alert alert-danger">
                       {{$errors->first('name')}}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label for="text">Role:</label>
                <input type="text" class="form-control" id="text" placeholder="Enter role" name="role">
                <br>
                @if ($errors->has('role'))
                    <div class="alert alert-danger">
                        {{$errors->first('role')}}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label for="text">Username:</label>
                <input type="text" class="form-control" id="text" placeholder="Enter username" name="username">
                <br>
                @if ($errors->has('username'))
                    <div class="alert alert-danger">
                        {{$errors->first('username')}}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label for="text">Password:</label>
                <input type="password" class="form-control" id="text" placeholder="Enter password" name="password">
                <br>
                @if ($errors->has('password'))
                    <div class="alert alert-danger">
                       {{$errors->first('password')}}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label for="text">Email:</label>
                <input type="email" class="form-control" id="text" placeholder="Enter email" name="email">
                <br>
                @if ($errors->has('email'))
                    <div class="alert alert-danger">
                       {{$errors->first('email')}}
                    </div>
                @endif
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>
    </body>
@endsection

