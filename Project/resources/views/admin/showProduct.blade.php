@extends('layouts.adminfrontend')
@section('admin_content')

<div class="container-fluid">

    <div class="card shadow mb-4">
        <div class="card-header py-2">
            <h1 class="h3 mb-4 text-gray-800">Product</h1>

            <div class="float-end">
            <a href="{{ url('/addProduct') }}" class="btn float-right" style="background-color: #F78D03; color:white;">Create Product</a>
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
                    <th>Image</th>
                    <td>Name</td>
                    <td>Description</td>
                    <td>Price</td>
                    <td>Quantity</td>
                    <th>Category</th>
                    <td>Action</td>
                        </tr>
                    </thead>

                    <tbody>
                     @foreach($products as $product)
                     <tr>
                    <td>{{$product->id}}</td>
                    <td><img src="{{asset('images/')}}/{{$product->image}}" alt="" width="100" class="img-fluid"></td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->description}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->quantity}}</td>
                    <td>{{$product->catName}}</td>
                    <td>
                    <a href="{{route('editProduct',['id'=>$product->id])}}" name="editproduct" class="btn btn-warning">Edit</a>&nbsp;
                    <a href="{{ route('deleteProduct',['id'=>$product->id])}}" class="btn btn-danger btn-xs" onClick="return confirm('Are you sure to delete?')">Delete</a>
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