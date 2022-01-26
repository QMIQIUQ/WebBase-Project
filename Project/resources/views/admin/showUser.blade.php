@extends('layouts.adminfrontend')
@section('admin_content')

<div class="container-fluid">

    <div class="card shadow mb-4">
        <div class="card-header py-2">
            <h1 class="h3 mb-4 text-gray-800">All User</h1>

           
        
            
        </div>
        
        <div class="card-body">

        @if(session('status'))
        <div class="alert alert-success">{{session('status')}}</div>
        
        @endif

            <div class="table-responsive">

                <table class="table table-bootdered text-dark " id="datatablesSimple" width="100%" collspacing="0">
                    <thead style="background-color: #EAEFF4;">
                        <tr class="text-dark">

                    <td>ID</td>
                    <td>Name</td>
                    <th>Email</th>
                    <td>Role</td>
                    <td>Account Created Date</td>
                    <td>Action</td>

                        </tr>
                    </thead>

                    <tbody>
                     @foreach($users as $user)
                     <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>

                    @if($user->role_as == '1')
                    <td>Admin</td>
                    @else
                    <td>User</td>
                   @endif

                   <td>{{$user->created_at}}</td>
                    
                    <td><a href="{{route('editUser',['id'=>$user->id])}}" name="edituser" class="btn btn-warning">Edit</a></td>
                   
                </tr>
                        @endforeach


                    </tbody>
                </table>


            </div>
        </div>
    </div>
</div>


@endsection