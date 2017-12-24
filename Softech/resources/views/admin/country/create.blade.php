@extends ('admin.layouts.index')
@section('content')
    <body>
    <div class="container">
        <h2>Create Country</h2>
        <form action="" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="text">Country:</label>
                <input type="text" class="form-control" id="text" placeholder="Enter country" name="country">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>
    </body>
@endsection

