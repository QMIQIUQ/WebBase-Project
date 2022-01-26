@extends('layouts.frontend')

@section('content')
<header id="home">


<div class="card-body text-dark">
    @if (session('status'))
    <div class="alert alert-success " role="alert">
        {{ session('status') }}
    </div>
    @endif

</div>


<div class="tophead" >
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-7 ">
                        <h1 class="title-main wow fadeInLeft text-dark" data-wow-duration="1.5s">Welcome to Phone Shop</h1>
                        <h3 class="subtitle-main wow fadeInUp text-dark" data-wow-duration="1.1s">Phone Shop is a platform responsible for online sales of various brands of mobile phones.</h3>
						<div class="top-btn-block wow fadeInUp" data-wow-duration="2.5s">
							<!-- <a href="http://127.0.0.1:8000/" class="btn-explore "><input type=button value='View Product'></a> -->
							
						</div>
                    </div>
                </div>
            </div>

        </div>
        <div class="sesgoabajo"></div>
    </header>
<main>
        <section class="overview-wrap" id="overview">
            <div class="container">
                <div class="contenedor">
                    <h2 class="title-overview wow fadeInUp">Top 4 mobile phone brands for sale</h2>
                    <br><br>
                    <div class="row">
                        <div class="col-md-6 col-lg-3 wow bounceInUp" data-wow-duration="1.4s">
                            <img src="images/apple.png" width="250px" height="200px">
                        </div>
                        <div class="col-md-6 col-lg-3 wow bounceInUp" data-wow-duration="1.4s">
                            <img src="images/samsung.jpg" width="250px" height="200px">
                        </div>
                       <div class="col-md-6 col-lg-3 wow bounceInUp" data-wow-duration="1.4s">
                            <img src="images/huawei.png" width="280px" height="200px">
                        </div>
                       <div class="col-md-6 col-lg-3 wow bounceInUp" data-wow-duration="1.4s">
                       <img src="images/oppo.jpg" width="250px" height="200px">
                        </div>
                    </div>

                  
                </div>
            </div>
        </section>

        <section class="our-team" id="team">
            <div class="container">
                <h2 class="title-our-team wow fadeInUp">Overview</h2>
                <p class="subtitle-our-team wow fadeInUp">Provide customers with the best service and high-quality mobile phones</p>
                <ul class="row">
                    <li class="col-12 col-md-6 col-lg-4 wow fadeInLeft" data-wow-duration="1.4s">
                    <iframe width="420" height="345" src="https://www.youtube.com/embed/RcGz5z0W1MQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </li>
                    <li class="col-12 col-md-6 col-lg-4 wow fadeInLeft" data-wow-duration="1.4s">
                    <iframe width="420" height="345" src="https://www.youtube.com/embed/uJ-KLqo_jNQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </li>
                    <li class="col-12 col-md-6 col-lg-4 wow fadeInLeft" data-wow-duration="1.4s">
                    <iframe width="420" height="345" src="https://www.youtube.com/embed/54tGywFswXs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </iframe>
                    </li>
                </ul>
            </div>
        </section>
        
  
    </main>


@endsection