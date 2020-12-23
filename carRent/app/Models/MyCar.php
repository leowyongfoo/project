<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MyCar extends Model
{
    use HasFactory;
    protected $fillable=['orderID','userID','dayRented','carID'];

    
    public function car(){

        return $this->belongsTo('App\Car');

    }

    public function user(){

        return $this->belongsTo('App\User');

    }
}
