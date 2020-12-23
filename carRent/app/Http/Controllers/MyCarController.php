<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Car; 
use App\Models\Type;
use App\Models\MyCar;
Use Session;
Use Auth;


class MyCarController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
        
    }

    public function add(){ 

        $r=request(); 
        $addCar=MyCar::create([    
            
            'dayRented'=>$r->dayRented,             
            'orderID'=>'',
            'carID'=>$r->id,                 
            'userID'=>Auth::id(), 
                        
        ]);
        Session::flash('success',"Car add succesful!");        
        Return redirect()->route('clientView');
    }

    public function viewMyCar(){
        $mycars=DB::table('my_cars')
        ->leftjoin('cars', 'cars.id', '=', 'my_cars.carID')
        ->select('my_cars.dayRented as carRent','my_cars.id as cid','cars.*')
        ->where('my_cars.orderID','=','') 
        ->where('my_cars.userID','=',Auth::id())
        ->paginate(12);
        
        return view('myCar')->with('mycars',$mycars);
    }

    public function delete($id){
        $mycars=MyCar::find($id);
        $mycars->delete();
        Session::flash('deleted',"Car deleted !");
        return redirect()->route('my.car');

        
    }
    
}
