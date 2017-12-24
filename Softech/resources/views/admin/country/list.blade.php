@extends ('admin.layouts.index')
@section('content')
    <div class="container">
        <h2>List Country</h2>
        <table class="table table-bordered">
            <tr>
                <td>ID</td>
                <td>Country</td>
                <td>Edit</td>
                <td>Delete</td>
            </tr>
            @foreach($countries as $country)
                <tr>
                    <td>{{ $country->id }}</td>
                    <td>{{ $country->country }}</td>
                    <td>
                        <a href="{{ url('admin/country/list/edit/'.$country->id)}} "><img src="{{ asset('admin_movie/image/edit--pencil-icon-63785.png') }}" alt="" width="40px">Edit</a>
                    </td>
                    <td>
                        <a href="{{ url('admin/country/list/delete/'.$country->id) }}"><img src="{{ asset('admin_movie/image/depositphotos_27326509-stock-illustration-delete-icon.jpg') }}" alt="" width="40px">Delete</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection