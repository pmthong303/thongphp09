@extends ('admin.layouts.index')
@section('content')
    <div class="container">
        <h2>Create Actor</h2>
        <form action="{{ route('updateActor') }}" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <input type="hidden" name="id" value="{{ $actors->id }}">
                <label for="text">Actor:</label>
                <input type="text" class="form-control" placeholder="Enter category" name="category" value="{{ $actors->name }}">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>
    </body></html>
@endsection
