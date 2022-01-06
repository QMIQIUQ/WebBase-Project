@extends('layouts.adminfrontend')
@section('admin_content')

<div class="container-fluid">

<div class="card shadow mb-4">
    <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold ">Add New Category</h6>

    </div>
</div>

<div class="card-body">


<form action="{{route('updateProduct')}}" method="post" enctype="multipart/form-data">
@csrf
@foreach($products as $product)
<div class="form-group">
<img src="{{asset('images/')}}/{{$product->image}}" alt="" width="100" class="img-fluid"><br>
<label for="productname">Product Name</label>
            <input type="hidden" name="id" value="{{$product->id}}">
            <input class="form-control" type="text" id="productName" name="productName" required value="{{$product->name}}">
    </div>


    <div class="form-group">
            <label for="productDescription">Description</label>
            <input class="form-control" type="text" id="productDescription" name="productDescription" required value="{{$product->description}}">
            </div>
            <div class="form-group">
            <label for="productPrice">Price</label>
            <input class="form-control" type="number" id="productPrice" name="productPrice" min="0" required value="{{$product->price}}">
            </div>
            <div class="form-group">
            <label for="productQuantity">Quantity</label>
            <input class="form-control" type="number" id="productQuantity" name="productQuantity" min="0" required value="{{$product->quantity}}">
            </div>
            <div class="form-group">
            <label for="productImage">Image</label>
            <input class="form-control" type="file" id="productImage" name="productImage" >
            </div>
            <div class="form-group">
            <label for="Category">Category</label>
            <select name="CategoryID" id="CategoryID" class="form-control">
                    @foreach($categoryID as $category)
                        <option value="{{$category->id}}"
                        @if($product->CategoryID==$category->id)
                            selected
                        @endif
                        >{{$category->name}}</option>
                    @endforeach
                </select>  
             </div>
    
    <a href="{{ url('/viewProduct') }}" class="btn btn-danger">Cencel</a>
    <button type="submit" class="btn btn-primary">Update</button>
    @endforeach
</form>

</div>
</div>




@endsection