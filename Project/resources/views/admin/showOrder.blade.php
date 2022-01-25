@extends('layouts.adminfrontend')
@section('admin_content')

<div class="container-fluid">

    <div class="card shadow mb-4">
        <div class="card-header py-2">
            <h1 class="h3 mb-4 text-gray-800">All Order</h1>

           
        
            
        </div>
        
        <div class="card-body">

        @if(session('status'))
        <div class="alert alert-success">{{session('status')}}</div>
        
        @endif

            <div class="table-responsive">

                <table class="table table-bootdered text-dark " id="datatablesSimple" width="100%" collspacing="0">
                    <thead style="background-color: #EAEFF4;">
                        <tr class="text-dark">

                    <td>Order ID</td>
                    <th>User Name</th>
                    <td>Payment Status</td>
                    <td>Amount</td>
                    <td>Order Time</td>
                    <td>Action</td>

                        </tr>
                    </thead>

                    <tbody>
                     @foreach($orders as $order)
                     <tr>
                    <td>{{$order->id}}</td>
                    <td>{{$order->userName}}</td>
                    <td>{{$order->paymentStatus}}</td>
                    <td>{{$order->amount}}</td>
                    <td>{{$order->created_at}}</td>
                    
                    <td><a href="{{route('editOrder',['id'=>$order->id])}}" name="editorder" class="btn btn-warning">Edit</a></td>
                   
                </tr>
                        @endforeach


                    </tbody>
                </table>


            </div>
        </div>
    </div>
</div>


@endsection