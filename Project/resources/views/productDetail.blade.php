@extends('layouts.frontend')
@section('content')

<div class="container-fluid">
<div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-8">
        <br><br>


        <div class="card-body">
        
            <form action="{{route('add.to.cart')}}" method="post">
           @csrf
            @foreach($products as $product)
            <div class="row">
                <div class="col-md-3">
                    <h5 class="card-title text-dark">{{$product->name}}</h5>
                    <input type="hidden" name="id" value="{{$product->id}}">
                    <img src="{{asset('images/')}}/{{$product->image}}" alt="" width="100%" class="img-fluid">
                </div>

                <div class="col-md-9">
                    <br><br>

                    <p class="card-text text-dark">{{$product->description}}</p>
                    <div class="card-heading text-dark">Quantity :<input type="number" min="1" name="quantity" id="" required> Available:{{$product->quantity}}</div>

                    <br><br>

                    <div class="card-heading text-dark">Price:{{$product->price}}</div>
                    <br>

                    <button type="submit" class="btn btn-danger btn-xs">Add to Cart</button>

                </div>
            </div>
            @endforeach
            </form>
        </div>



    </div>

    <div class="col-sm-2"></div>

</div>

</div>
@endsection