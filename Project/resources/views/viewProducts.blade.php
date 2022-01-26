<style>
    @import url('https://fonts.googleapis.com/css2?family=Fira+Sans+Extra+Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Heebo:wght@100;200;300;400;500;600;700;800;900&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');


    :root {
        --font1: 'Heebo', sans-serif;
        --font2: 'Fira Sans Extra Condensed', sans-serif;
        --font3: 'Roboto', sans-serif
    }

    h2 {
        font-weight: 900
    }

    .container-fluid {
        max-width: 1200px
    }

    .card {
        background: #fff;
        box-shadow: 0 6px 10px rgba(0, 0, 0, .08), 0 0 6px rgba(0, 0, 0, .05);
        transition: .3s transform cubic-bezier(.155, 1.105, .295, 1.12), .3s box-shadow, .3s -webkit-transform cubic-bezier(.155, 1.105, .295, 1.12);
        border: 0;
        border-radius: 1rem
    }

    .card-img,
    .card-img-top {
        border-top-left-radius: calc(1rem - 1px);
        border-top-right-radius: calc(1rem - 1px)
    }

    .card h5 {
        overflow: hidden;
        height: 56px;
        font-weight: 900;
        font-size: 1rem
    }

    .card-img-top {
        width: 100%;
        max-height: 180px;
        object-fit: contain;
        padding: 30px
    }

    .card h2 {
        font-size: 1rem
    }

    .card:hover {
        transform: scale(1.05);
        box-shadow: 0 10px 20px rgba(0, 0, 0, .12), 0 4px 8px rgba(0, 0, 0, .06)
    }

    .label-top {
        position: absolute;
        background-color: #8bc34a;
        color: #fff;
        top: 8px;
        right: 8px;
        padding: 5px 10px 5px 10px;
        font-size: .7rem;
        font-weight: 600;
        border-radius: 3px;
        text-transform: uppercase
    }

    .top-right {
        position: absolute;
        top: 24px;
        left: 24px;
        width: 90px;
        height: 90px;
        border-radius: 50%;
        font-size: 1rem;
        font-weight: 900;
        background: #ff5722;
        line-height: 90px;
        text-align: center;
        color: white
    }

    .top-right span {
        display: inline-block;
        vertical-align: middle
    }

    @media (max-width: 768px) {
        .card-img-top {
            max-height: 250px
        }
    }

    .over-bg {
        background: rgba(53, 53, 53, 0.85);
        box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
        backdrop-filter: blur(0.0px);
        -webkit-backdrop-filter: blur(0.0px);
        border-radius: 10px
    }

    .btn {
        font-size: 1rem;
        font-weight: 500;
        text-transform: uppercase;
        padding: 5px 50px 5px 50px
    }

    .box .btn {
        font-size: 1.5rem
    }

    @media (max-width: 1025px) {
        .btn {
            padding: 5px 40px 5px 40px
        }
    }

    @media (max-width: 250px) {
        .btn {
            padding: 5px 30px 5px 30px
        }
    }

    .btn-warning {
        background: none #f7810a;
        color: #ffffff;
        fill: #ffffff;
        border: none;
        text-decoration: none;
        outline: 0;
        box-shadow: -1px 6px 19px rgba(247, 129, 10, 0.25);
        border-radius: 100px
    }

    .btn-warning:hover {
        background: none #ff962b;
        color: #ffffff;
        box-shadow: -1px 6px 13px rgba(255, 150, 43, 0.35)
    }

    .bg-success {
        font-size: 1rem;
        background-color: #f7810a !important
    }

    .bg-danger {
        font-size: 1rem
    }

    .price-hp {
        font-size: 1rem;
        font-weight: 600;
        color: darkgray
    }

    .amz-hp {
        font-size: .7rem;
        font-weight: 600;
        color: darkgray
    }

    .fa-question-circle:before {
        color: darkgray
    }

    .fa-plus:before {
        color: darkgray
    }

    .box {
        border-radius: 1rem;
        background: #fff;
        box-shadow: 0 6px 10px rgb(0 0 0 / 8%), 0 0 6px rgb(0 0 0 / 5%);
        transition: .3s transform cubic-bezier(.155, 1.105, .295, 1.12), .3s box-shadow, .3s -webkit-transform cubic-bezier(.155, 1.105, .295, 1.12)
    }

    .box-img {
        max-width: 300px
    }

    .thumb-sec {
        max-width: 300px
    }

    @media (max-width: 576px) {
        .box-img {
            max-width: 200px
        }

        .thumb-sec {
            max-width: 200px
        }
    }

    .inner-gallery {
        width: 60px;
        height: 60px;
        border: 1px solid #ddd;
        border-radius: 3px;
        margin: 1px;
        display: inline-block;
        overflow: hidden;
        -o-object-fit: cover;
        object-fit: cover
    }

    @media (max-width: 370px) {
        .box .btn {
            padding: 5px 40px 5px 40px;
            font-size: 1rem
        }
    }

    .disclaimer {
        font-size: .9rem;
        color: darkgray
    }

    .related h3 {
        font-weight: 900
    }
</style>
@extends('layouts.frontend')
@section('content')

<link href="css/templatemo_style.css" rel="stylesheet" type="text/css" />



    <div id="templatemo_wrapper">


        <div class="ddsmoothmenu">


        </div> <!-- end of templatemo_menu -->

        <div class="cleaner h20"></div>
        <div id="templatemo_main_top">


        </div>
        <div id="templatemo_main">


            <div id="sidebar">
                <h3>Categories</h3>

                <ul class="sidebar_menu">
                    <li><a href="{{route('userShowPhone')}}">All</a></li>

                    @foreach($categories as $category)
                    <li><a href="{{route('userShowPhone',['category'=>$category->id])}}">{{$category->name}}</a></li>

                    @endforeach
                </ul>

            </div> <!-- END of sidebar -->

            <div id="cont">

                <div>
                    <form action="{{ route('search.product') }}" method="Get">
                        @csrf
                        <div class="input-group">
                            <input type="text" class="form-control" name="searchProduct" id="searchProduct"
                                placeholder="Search">
                            <button class="btn btn-success" type="submit">Search</button>
                        </div>
                    </form>

                </div>

                @if($categoryName==null)
                <h2></h2>
                @else
                @foreach ($categoryName as $CName)

                <h2>{{$CName->name}}</h2>
                @endforeach
                @endif

                <div class="row row-cols-1 row-cols-md-2">
                    @foreach($products as $product)

                    <div class="col mb-4 product_gallery">

                        <div class="card-group">

                            <div class="card-body">
                                <p class="username">Seller:{{$product->username}}</p>
                                <a href="{{ route('product.detail', ['id' => $product->id]) }}">
                                    <img class="" src="{{ asset('images/') }}/{{$product->image}}" alt=""
                                        width="100px"></a>

                                <h3 class="card-text">{{$product->name}}</h3>
                                <p class="card-text product_price">RM{{$product->price}}</p>
                            </div>
                        </div>

                    </div>
                    @endforeach
                </div>





                <div class="cleaner h50"></div>

                {{ $products->links('pagination::bootstrap-4')}}
                <div class="cleaner"></div>
            </div> <!-- END of content -->


            <div class="cleaner"></div>

        </div> <!-- END of main -->




    </div>

    
<div class="row">

<div class="col-md-1">

</div>
<div class=" col-md-11">
    <div class="container">
        <div class="nav-item">

            <form class="d-flex" action="{{route('search.products')}}" method="POST">
                @csrf
                <input class="form-control me-2" name="keyword" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>

        </div>
        <div class="row">
            @foreach($products as $product)
            <div class="col col-md-3 align-items-stretch">
                <div class="card ">
                    <div class="card-body">
                        <a href="{{ route('product.detail', ['id' => $product->id]) }}">
                            <h5 class="card-title text-dark">{{$product->name}}</h5>
                            <img src="{{ asset('images/') }}/{{$product->image}}" width="100%" class="card-image-top">
                            <div class="card-heading text-dark">Description: {{$product->description}}</div>
                            <div class="card-heading text-dark">RM {{$product->price}}</div>
                        </a>


                        <form action="{{route('add.to.cart')}}" method="post">
                            @csrf
                            <input type="hidden" name="quantity" value="1">
                            <input type="hidden" name="id" value="{{$product->id}}">
                            <button style="float:right;margin-right:10px;" class="btn btn-success btn-xs mr-2">Add to
                                Cart</button>
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
</div>
</div>

@endsection