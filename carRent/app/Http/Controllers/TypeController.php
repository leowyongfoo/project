<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Type; 

class TypeController extends Controller
{
    //
    public function create(){
        return view('insertType');
    }

    public function store(){    
        $r=request(); 
        $addType=Type::create([    
            'id'=>$r->ID,  
            'name'=>$r->name, 
            
        ]);
        
        Return view('insertType');
    }

    public function view(){
        $types=Type::all();
        return view('showType')->with('types',$types);
    }

    public function delete($id){
        $types=Type::find($id);
        $types->delete(); //apply delete from categories where id='$id'
        return redirect()->route('showType');
    }

}
