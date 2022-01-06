@extends('layouts.adminfrontend')
@section('admin_content')


<div class="container-fluid">

<div class="card shadow mb-4">
    <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold ">Add New Category</h6>

    </div>
</div>

<div class="card-body">


<form action="{{route('addCategory')}}" method="post">
@csrf

<div class="form-group">
<label for="addCategory">Category</label>
        <input type="text" class="form-control" id="categoryName" name="categoryName" required>
    </div>

    
    <a href="{{ url('/viewCategory') }}" class="btn btn-danger">Cencel 取消</a>
    <button type="submit" class="btn btn-primary">Add New </button>
</form>

</div>
</div>

@endsection