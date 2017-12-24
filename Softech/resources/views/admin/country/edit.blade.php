@extends ('admin.layouts.index')
@section('content')
    <div class="container">
        <h2>Create Country</h2>
        <form action="{{ route('updateCountry') }}" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <input type="hidden" name="id" value="{{ $countries->id }}">
                <label for="text">Category:</label>
                <input type="text" class="form-control" placeholder="Enter category" name="category" value="{{ $countries->country }}">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>
    </body></html>
@endsection
