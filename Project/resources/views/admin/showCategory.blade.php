@extends('layouts.adminfrontend')
@section('admin_content')


<div class="container-fluid">

    <div class="card shadow mb-4">
        <div class="card-header py-2">
            <h1 class="h3 mb-4 text-gray-800">Category</h1>

            <div class="float-end">
            <a href="{{ url('/addCategory') }}" class="btn float-right" style="background-color: #F78D03; color:white;">Create Category</a>
            </div>
            
        </div>
        
        <div class="card-body">

        @if(session('status'))
        <div class="alert alert-success">{{session('status')}}</div>
        
        @endif

            <div class="table-responsive">

                <table class="table table-bootdered text-dark" id="datatablesSimple" width="100%" collspacing="0">
                    <thead style="background-color: #EAEFF4;">
                        <tr class="text-dark">

                            <td>ID</td>
                            <td>Name</td>
                            <td>Action</td>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($categories as $cty)
                        <tr>
                            <td>{{$cty->id}}</td>
                            <td>{{$cty->name}}</td>

                            <td>
                            <a href="{{route('editCategory',['id'=>$cty->id])}}" name="editCategory" class="btn btn-warning">Edit</a>&nbsp;
                            </td>


                        </tr>
                        @endforeach


                    </tbody>
                </table>


            </div>
        </div>
    </div>
</div>


@endsection