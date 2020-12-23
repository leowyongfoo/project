<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Car; 
use App\Models\MyCar;
use App\Models\Order;
Use Auth;

class OrderController extends Controller
{
    //
    public function add(){ 

        $r=request(); 
        $addOrder=Order::create([    
            
            'amount'=>$r->amount,             
            'paymentStatus'=>'pending',                 
            'userID'=>Auth::id(),                          
        ]); 
        
        $orderID=DB::table('orders')->where('userID','=',Auth::id())->orderBy('created_at', 'desc')->first();       
        
        $items=$r->input('item');
        foreach($items as $item => $value){
            $mycars =MyCar::find($value);
            $mycars->orderID = $orderID->id;
            $mycars->save();
        }
        
        Session::flash('success',"Order succesful!");        
        Return redirect()->route('my.order'); 
        
    }

   /* public function show(){

        $myorders=DB::table('my_orders')
        ->leftjoin('my_carts', 'my_orders.id', '=', 'my_carts.orderID')
        ->leftjoin('products', 'products.id', '=', 'my_carts.productID')
        ->select('my_carts.*','my_orders.*','products.*','my_carts.quantity as qty')
        ->where('my_orders.userID','=',Auth::id())
        ->get();
        //->paginate(3);       
        return view('myOrder')->with('myorders',$myorders);
    }*/
}

