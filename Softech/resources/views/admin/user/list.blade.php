<@extends ('admin.layouts.index')
@section('content')
    <div class="container">
        @if(\Illuminate\Support\Facades\Session::has('message'))
            <div class="alert alert-success">
                {{ \Illuminate\Support\Facades\Session::get('message') }}
            </div>
        @endif
        <h2>List User</h2>
        <table class="table table-bordered">
            <tr>
                <td>ID</td>
                <td>Role</td>
                <td>Name</td>
                <td>Username</td>
                <td>Email</td>
                <td>Edit</td>
                <td>Delete</td>
            </tr>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->role }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <a href="{{ url('admin/user/list/edit/'.$user->id)}} "><img src="{{ asset('admin_movie/image/edit--pencil-icon-63785.png') }}" alt="" width="40px">Edit</a>
                    </td>
                    <td>
                        <a href="{{ url('admin/user/list/delete/'.$user->id) }}"><img src="{{ asset('admin_movie/image/depositphotos_27326509-stock-illustration-delete-icon.jpg') }}" alt="" width="40px">Delete</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection