@extends('layouts.adminfrontend')
@section('admin_content')


<div class="container-fluid">

<div class="card shadow mb-4">
    <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold ">Edit Category</h6>

    </div>
</div>

<div class="card-body">


<form action="{{route('updateCategory')}}" method="post" enctype="multipart/form-data">
@csrf
@foreach($categories as $category)
<div class="form-group">
<label for="addCategory">Category</label>
        <input type="hidden" name="id" value="{{$category->id}}">
        <input type="text" class="form-control" id="categoryName" name="categoryName" value="{{$category->name}}" required>
    </div>

    
    <a href="{{ url('/viewCategory') }}" class="btn btn-danger">Cencel</a>
    <button type="submit" class="btn btn-primary">Update</button>
    @endforeach
</form>

</div>
</div>

@endsection