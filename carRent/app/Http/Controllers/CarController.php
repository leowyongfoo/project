<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Car; 
use App\Models\Type;

class CarController extends Controller
{
    //
    public function create(){
        return view('insertCar') ->with('types',Type::all());;
    }

    public function store(){    //step 2 
        $r=request(); //step 3 get data from HTML
        $image=$r->file('car-image');   //step to upload image get the file input
        $image->move('images',$image->getClientOriginalName());   //images is the location                
        $imageName=$image->getClientOriginalName(); 

        $addCar=Car::create([    //step 3 bind data
            'id'=>$r->ID, //add on 
            'name'=>$r->name, //fullname from HTML
            'description'=>$r->description,
            'typeID'=>$r->type,
            'price'=>$r->price,
            'image'=>$imageName,
            
        ]);
       
    }

    public function view(){
        $cars=Car::paginate(3);
        
        return view('showCar')->with('cars',$cars);
    }

    public function delete($id){
        $cars=Car::find($id);
        $cars->delete();
        return redirect()->route('showCar');
    }

    public function edit($id){
       
        $cars =Car::all()->where('id',$id);
        
        return view('editCar')->with('cars',$cars)
                              ->with('types',Type::all());
    }

    public function update(){
        $r=request();
        $cars =Car::find($r->ID);       
        if($r->file('car-image')!=''){
            $image=$r->file('car-image');        
            $image->move('images',$image->getClientOriginalName());                   
            $imageName=$image->getClientOriginalName(); 
            $cars->image=$imageName;
            }         
        $cars->name=$r->name;
        $cars->description=$r->description;
        $cars->price=$r->price;
        $cars->typeID=$r->type;
        $cars->save();
        return redirect()->route('showCar');
    }

    public function clientView(){
        $cars=Car::paginate(3);
        
        return view('clientView')->with('cars',$cars);
    }

    public function viewCarDetail($id){
       
        $cars =Car::all()->where('id',$id);
        
        return view('carDetail')->with('cars',$cars)
                                ->with('types',Type::all());
    }

    
}
