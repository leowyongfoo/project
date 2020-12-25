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
        
       
        Return redirect()->route('my.order'); 
        
    }

    public function viewOrder(){

        $myorders=DB::table('orders')
        ->leftjoin('my_cars', 'orders.id', '=', 'my_cars.orderID')
        ->leftjoin('cars', 'cars.id', '=', 'my_cars.carID')
        ->select('my_cars.*','orders.*','cars.*','my_cars.dayRented as carRented')
        ->where('orders.userID','=',Auth::id())
        ->get();
        //->paginate(3);       
        return view('myOrder')->with('myorders',$myorders);
    }
}

