<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $fillable=['name','description','price','image','typeID'];

    public function type(){
        return $this->belongsTo('App\Models\Type');
    }
}
