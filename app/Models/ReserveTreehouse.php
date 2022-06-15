<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReserveTreehouse extends Model
{
    use HasFactory;

      protected $table = "reservetreehouses";
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

     public function treehouse(){
    	return $this->belongsTo('App\Models\treehouse','treehouse_id');
    }
}
