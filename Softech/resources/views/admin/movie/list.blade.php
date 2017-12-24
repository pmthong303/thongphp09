@extends ('admin.layouts.index')
@section('content')
    <div class="container">
        <h2>List Movie</h2>
        <table class="table table-bordered">
            <tr>
                <td>ID</td>
                <td>Movie Name</td>
                <td>Genres</td>
                <td>Category</td>
                <td>Country</td>
                <td>Detail</td>
                <td>Quality</td>
                <td>Year</td>
                <td>Duration</td>
                <td>Image</td>
                <td>Edit</td>
                <td>Delete</td>
            </tr>
            @foreach($movies as $movie)
                <tr>
                    <td>{{ $movie->id }}</td>
                    <td>{{ $movie->name }}</td>
                    <td>{{ $movie->genres->genres}}</td>
                    <td>{{ $movie->category->category}}</td>
                    <td>{{ $movie->country->country}}</td>
                    <td>{!! $movie->detail !!}</td>
                    <td>{{ $movie->quality }}</td>
                    <td>{{ $movie->year }}</td>
                    <td>{{ $movie->duration }}</td>
                    <td><img src={{asset('images/'.$movie->image)}} alt="" width="200px"></td>
                    <td>
                        <a href="{{ url('admin/movie/list/edit/'.$movie->id) }}"><img src="{{ asset('admin_movie/image/edit--pencil-icon-63785.png') }}" alt="" width="40px">Edit</a>
                    </td>
                    <td>
                        <a href="{{ url('admin/movie/list/delete/'.$movie->id) }}"><img src="{{ asset('admin_movie/image/depositphotos_27326509-stock-illustration-delete-icon.jpg') }}" alt="" width="40px">Delete</a>
                    </td>
                </tr>
            @endforeach
@endsection