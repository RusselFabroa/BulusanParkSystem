<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReserveFunctionHall extends Model
{
    use HasFactory;
     protected $table = "reservefunctionhall";
        protected $fillable = [
        'status',
        'date',
            'enddate',
         'mobilenumber',
        'address',
        'note',
    ];

  public function user(){
    	return $this->belongsTo('App\Models\User','user_id');
    }

     public function functionhall(){
    	return $this->belongsTo('App\Models\functionhall','functionhalls_id');
    }
}
