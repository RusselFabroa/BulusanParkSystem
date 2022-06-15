<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReservePavillion extends Model
{
    use HasFactory;

     protected $table = "reservepavillion";
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

     public function pavillionhall(){
    	return $this->belongsTo('App\Models\pavillionhall','pavillionhalls_id');
    }
}
