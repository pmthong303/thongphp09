@extends ('admin.layouts.index')
@section('content')
    <div class="container">
        <h2>List Actor</h2>
        <table class="table table-bordered">
            <tr>
                <td>ID</td>
                <td>Actor</td>
                <td>Edit</td>
                <td>Delete</td>
            </tr>
            @foreach($actors as $actor)
                <tr>
                    <td>{{ $actor->id }}</td>
                    <td>{{ $actor->name }}</td>
                    <td>
                        <a href="{{ url('admin/actor/list/edit/'.$actor->id)}} "><img src="{{ asset('admin_movie/image/edit--pencil-icon-63785.png') }}" alt="" width="40px">Edit</a>
                    </td>
                    <td>
                        <a href="{{ url('admin/actor/list/delete/'.$actor->id) }}"><img src="{{ asset('admin_movie/image/depositphotos_27326509-stock-illustration-delete-icon.jpg') }}" alt="" width="40px">Delete</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection