@extends ('admin.layouts.index')
@section('content')
<div class="container">
    <h2>List Category</h2>
    <table class="table table-bordered">
        <tr>
            <td>ID</td>
            <td>Category</td>
            <td>Edit</td>
            <td>Delete</td>
        </tr>
        @foreach($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->category }}</td>
                <td>
                    <a href="{{ url('admin/category/list/edit/'.$category->id)}} "><img src="{{ asset('admin_movie/image/edit--pencil-icon-63785.png') }}" alt="" width="40px">Edit</a>
                </td>
                <td>
                    <a href="{{ url('admin/category/list/delete/'.$category->id) }}"><img src="{{ asset('admin_movie/image/depositphotos_27326509-stock-illustration-delete-icon.jpg') }}" alt="" width="40px">Delete</a>
                </td>
            </tr>
        @endforeach
    </table>
</div>
@endsection