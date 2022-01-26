@extends('layouts.adminfrontend')
@section('admin_content')


<div class="container-fluid">

<div class="card shadow mb-4">
    <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold ">Edit Order</h6>

    </div>
</div>

<div class="card-body">


<form action="{{route('updateOrder')}}" method="post" enctype="multipart/form-data">
@csrf
@foreach($orders as $order)
<div class="form-group">
<label for="addOrder">User Name</label>
        <input type="hidden" name="order_id" value="{{$order->id}}">
        <input type="text" class="form-control" id="userID" name="userID" value="{{$order->userName}}" readonly>
       
</div>


<div class="form-group ">
<label for="addOrder">Amount (RM)</label>   
        <input type="text" class="form-control" id="OrderAmount" name="OrderAmount" value="{{$order->amount}}" required>
</div>

<div class="form-group mb-3">
<label for="addOrder">User Name</label>   


@if($order->paymentStatus == 'Done')

<select name="paymentStatus" id="paymentStatus" class="form-control">
  
<option value="Done" selected>Done</option>
  <option value="Pending">Pending</option>
  <option value="Delivery">Delivery</option>
  <option value="Cancel">Cancel</option>
</select>

@elseif($order->paymentStatus == 'Pending')

<select name="paymentStatus" id="paymentStatus" class="form-control">
<option value="Done">Done</option>
  <option value="Pending" selected>Pending</option>
  <option value="Delivery">Delivery</option>
  <option value="Cancel">Cancel</option>
</select>

@elseif($order->paymentStatus == 'Delivery')

<select name="paymentStatus" id="paymentStatus" class="form-control">
<option value="Done">Done</option>
  <option value="Pending">Pending</option>
  <option value="Delivery" selected>Delivery</option>
  <option value="Cancel">Cancel</option>
</select>

@elseif($order->paymentStatus == 'Cancel')

<select name="paymentStatus" id="paymentStatus" class="form-control">
<option value="Done">Done</option>
  <option value="Pending">Pending</option>
  <option value="Delivery">Delivery</option>
  <option value="Cancel" selected>Cancel</option>
</select>

@else

<select name="paymentStatus" id="paymentStatus" class="form-control">
  <option value="Done">Done</option>
  <option value="Pending">Pending</option>
  <option value="Delivery">Delivery</option>
  <option value="Cancel">Cancel</option>
</select>
    
@endif



</div>


    
    <a href="{{ url('/viewOrder') }}" class="btn btn-danger">Cencel</a>
    <button type="submit" class="btn btn-primary">Update</button>
    @endforeach
</form>

</div>
</div>

@endsection