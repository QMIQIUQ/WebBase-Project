@extends('layouts.adminfrontend')
@section('admin_content')


<div class="container-fluid">

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold ">Edit User</h6>

        </div>
    </div>

    <div class="card-body">


        <form action="{{route('updateUser')}}" method="post" enctype="multipart/form-data">
            @csrf
            @foreach($users as $user)
            <div class="form-group">
                <label for="">Name</label>
                <input type="hidden" name="user_id" value="{{$user->id}}">
                <input type="text" class="form-control" id="userName" name="userName" value="{{$user->name}}" required>
            </div>

            <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control" id="userEmail" name="userEmail" value="{{$user->email}}" required>
            </div>

            <div class="form-group">
                <label for="">Role</label>

                @if($user->role_as == '1')
                <select name="userRole" id="userRole" class="form-control">

                    <option value="1" selected>Admin</option>
                    <option value="0">User</option>

                </select>

                @else

                <select name="userRole" id="userRole" class="form-control">

                    <option value="1">Admin</option>
                    <option value="0" selected>User</option>

                </select>

                @endif


            </div>


            <br>
            <a href="{{ url('/viewUser') }}" class="btn btn-danger">Cencel</a>
            <button type="submit" class="btn btn-primary">Update</button>
            @endforeach
        </form>

    </div>
</div>

@endsection