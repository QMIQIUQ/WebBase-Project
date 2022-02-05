@extends('layouts.frontend')
@section('content')


<div class="container mt-5">

    <div class="card shadow mb-4">
        <div class="card-header py-2">
            <h1 class="h3 mb-4 text-dark ">My Order List (Phone Shop)</h1>

            <div class="float-end">
                <a class="btn btn-xs btn-info float-right text-light " href="{{(route('pdfReport'))}}">Download Report</a>
            </div>

        </div>

        <div class="card-body">


            <div class="table-responsive">

                <table class="table table-bootdered text-dark" id="dataTable" width="100%" collspacing="0">
                    <thead style="background-color: #EAEFF4;">
                        <tr class="text-dark">

                            <td>Order ID</td>
                            <td>Status &#128526;</td>
                            <td>Amount</td>

                        </tr>
                    </thead>

                    <tbody>
                        @foreach($orders as $order)
                        <tr>
                            <td>{{$order->id}}</td>
                            <td>{{$order->paymentStatus}}</td>
                            <td>RM {{$order->amount}}</td>

                        </tr>
                        @endforeach

                    </tbody>
                </table>


            </div>
        </div>
    </div>
</div>


@endsection