@extends ('admin.layouts.index')
@section('content')
    <body>
    <div class="container">
        <h2>Create Actor</h2>
        <form action="" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="text">Actor:</label>
                <input type="text" class="form-control" id="text" placeholder="Enter name" name="actor">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>
    </body>
@endsection

