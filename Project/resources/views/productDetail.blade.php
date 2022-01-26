@extends('layouts.frontend')
@section('content')

<style>
    span,
    small,
    h5,
    h6,
    p {
        color: black;
    }

    .card {
        border: none
    }

    .product {
        background-color: #eee
    }

    .brand {
        font-size: 13px
    }

    .act-price {
        color: red;
        font-weight: 700
    }

    .dis-price {
        text-decoration: line-through
    }

    .about {
        font-size: 14px
    }

    .color {
        margin-bottom: 10px
    }

    label.radio {
        cursor: pointer
    }

    label.radio input {
        position: absolute;
        top: 0;
        left: 0;
        visibility: hidden;
        pointer-events: none
    }

    label.radio span {
        padding: 2px 9px;
        border: 2px solid #ff0000;
        display: inline-block;
        color: #ff0000;
        border-radius: 3px;
        text-transform: uppercase
    }

    label.radio input:checked+span {
        border-color: #ff0000;
        background-color: #ff0000;
        color: #fff
    }

    .btn-danger {
        background-color: #ff0000 !important;
        border-color: #ff0000 !important
    }

    .btn-danger:hover {
        background-color: #da0606 !important;
        border-color: #da0606 !important
    }

    .btn-danger:focus {
        box-shadow: none
    }

    .cart i {
        margin-right: 10px
    }
</style>

<div class="container mt-5 mb-5">
    <div class="row d-flex justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <form action="{{route('add.to.cart')}}" method="post">
                    @csrf
                    @foreach($products as $product)
                    <div class="row">
                        <div class="col-md-6">
                            <div class="images p-3">
                                <div class="text-center p-4"> <img id="main-image"
                                        src="{{asset('images/')}}/{{$product->image}}" width="250" /> </div>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="product p-4">
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="{{ url('product') }}">
                                        <div class="d-flex align-items-center"> <i
                                                class="fa fa-long-arrow-left text-danger"></i> <span
                                                class="ml-1 text-danger">Back</span> </div>
                                    </a>
                                    <i class="fa fa-shopping-cart text-muted"></i>

                                </div>
                                <div class="mt-4 mb-3"> <span
                                        class="text-uppercase text-muted brand">{{$product->catName}}</span>
                                    <h5 class="text-uppercase">{{$product->name}}</h5>
                                    <input type="hidden" name="id" value="{{$product->id}}">
                                    <div class="price d-flex flex-row align-items-center">
                                        <span class="act-price">RM {{$product->price}}</span>

                                    </div>
                                </div>
                                <p class="about">Description :{{$product->description}}</p>
                                <div class="sizes mt-5">
                                    <h6 class="text-uppercase">Quantity :</h6>

                                    <input type="number" min="1" max="{{$product->quantity}}" name="quantity" id=""
                                        required>
                                    <h6 class="text-uppercase"> Available stock :{{$product->quantity}}</h6>


                                </div>
                                @if($product->quantity==0)
                                    <div class="cart mt-4 align-items-center"> <button
                                        class="btn btn-secondary text-uppercase mr-2 px-4" disabled>out of stoke</button> <i
                                        class="fa fa-heart text-muted"></i> <i class="fa fa-share-alt text-muted"></i>
                                </div>
                                @else
                                <div class="cart mt-4 align-items-center"> <button
                                        class="btn btn-danger text-uppercase mr-2 px-4">Add to cart</button> <i
                                        class="fa fa-heart text-muted"></i> <i class="fa fa-share-alt text-muted"></i>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    @endforeach
                </form>
            </div>
        </div>
    </div>
</div>

@endsection