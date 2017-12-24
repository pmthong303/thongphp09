@extends ('admin.layouts.index')
@section('content')
<div class="container">
    <h2>Edit Category</h2>
    <form action="{{ route('updateCategory') }}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <input type="hidden" name="id" value="{{ $categories->id }}">
            <label for="text">Category:</label>
            <input type="text" class="form-control" placeholder="Enter category" name="category" value="{{ $categories->category }}">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
</div>
</body></html>
@endsection
