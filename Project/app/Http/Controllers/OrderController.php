<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\myOrder;
use App\Models\MyCart;
use Illuminate\Support\Facades\Session;
use Barryvdh\DomPDF\Facade as PDF;

class OrderController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function view(){

        $orders=DB::table('my_orders')
        ->select('my_orders.*')
        ->where('my_orders.userID','=',Auth::id())
        ->get();
        

        return view('myOrder')->with('orders',$orders);

    }

    public function pdfReport(){

        $data=DB::table('my_orders')
        ->select('my_orders.*')
        ->where('my_orders.userID','=',Auth::id())
        ->get();

        $pdf= PDF::loadView('myPDF', compact('data'));
        return $pdf->download('MyPhone_order_report.pdf');
    }

    //xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
    //admin

    public function AdminView() {
        $orders=DB::table('my_orders')
        ->leftjoin('users','users.id','=','my_orders.userID')
        ->select('my_orders.*','users.name as userName')
        ->get();
        
        return view('admin.showOrder')->with('orders',$orders);
    }

 

    public function editOrder($id){
        $orders=DB::table('my_orders')
        ->leftjoin('users','users.id','=','my_orders.userID')
        ->select('my_orders.*','users.name as userName')
        ->where('my_orders.id',$id)
        ->get();

        return view('admin.editOrder')->with('orders',$orders)->with('userID',Auth::id());

    }

    public function updateOrder(){

        $r=request();
        $orders=myOrder::find($r->order_id);
        

            $orders->amount=$r->OrderAmount ;
            $orders->paymentStatus=$r->paymentStatus ;

            $orders->save();
        

        return redirect()->route('viewOrder')->with('status','Order update Successfully');

    }
}
