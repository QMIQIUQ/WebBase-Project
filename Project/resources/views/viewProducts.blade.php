@extends('layouts.frontend')
@section('content')


<div class="container">

    <div class="row">
        @foreach($products as $product)
        <div class="col-sm-4 mt-3 mb-3">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title text-dark">{{$product->name}}</h5>
                    <img src="{{asset('images/')}}/{{$product->image}}" alt="" width="80%" class="img-fluid">
                    <div class="card-heading text-dark">Description: {{$product->description}}</div>
                    <div class="card-heading text-dark">RM {{$product->price}}</div>

                    <a href="{{ route('product.detail', ['id' => $product->id]) }}" style="float:right" class="btn btn-warning btn-xs text-dark">Detail</a>

                    <form action="{{route('add.to.cart')}}" method="post">
                    @csrf
                    <input type="hidden"  name="quantity" value="1">
                    <input type="hidden" name="id" value="{{$product->id}}">
                    <button style="float:right" class="btn btn-danger btn-xs mr-2">Add to Cart</button>
                    </form>
                </div>
            </div>
        </div>

        @endforeach

        
    </div>

    <div class="row">
        <div class="col-md-5"></div>
        <div class="co1-sm-4">{{$products->links('pagination::bootstrap-4')}}</div>
        <div class="col-md-3"></div>
    </div>
    

    
</div>

@endsection