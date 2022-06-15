<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserve extends Model
{
    use HasFactory;

    protected $table = "reserves";
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

     public function cottage(){
    	return $this->belongsTo('App\Models\cottages','cottage_id');
    }
}
