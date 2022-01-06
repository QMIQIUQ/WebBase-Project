@extends('layouts.adminfrontend')
@section('admin_content')

@extends('layouts.adminfrontend')
@section('admin_content')

<div class="container-fluid">

<div class="card shadow mb-4">
    <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold ">Add New Product</h6>

    </div>
</div>

<div class="card-body">


<form action="{{route('addProduct')}}" method="post" enctype="multipart/form-data">
@csrf

<div class="form-group">
<label for="productName">Product Name</label>
            <input type="text" class="form-control" id="productName" name="productName" required>
    </div>

    <div class="form-group">
    <label for="productDescription">Description</label>
            <input type="text" class="form-control" id="productDescription" name="productDescription" required>
    </div>

    <div class="form-group">
    <label for="productPrice">Price</label>
            <input type="text" class="form-control" id="productPrice" name="productPrice" required>
    </div>

    <div class="form-group">
    <label for="productQuantity">Quantity</label>
            <input type="text" class="form-control" id="productQuantity" name="productQuantity" required>
    </div>

    <div class="form-group">
    <label for="productImage">Image</label>
            <input type="file" class="form-control" id="productImage" name="productImage" required>

    </div>

    <div class="form-group">
    <label for="categoryID">Category</label>
            <select name="categoryID" id="categoryID" class="form-control">

                @foreach($categoryID as $category)  

                
                <option value="{{$category->id}}">{{$category->name}}</option>

                @endforeach

            </select>

    </div>

    
    <a href="{{ url('/viewProduct') }}" class="btn btn-danger">Cencel 取消</a>
    <button type="submit" class="btn btn-primary">Add New </button>
    
</form>

</div>
</div>


@endsection
