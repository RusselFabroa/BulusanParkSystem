<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $table = "book";
    protected $fillable = [
        'fullname',
        'email',
        'book_date',
        'mobilenumber',
        'adult',
        'children',
    ];

    public function user(){
        return $this->belongsTo('App\Models\User','user_id');
    }

    public function reservedcottage(){
        return $this->belongsTo('App\Models\Reserve','cottage_id');
    }
    public function reservedtreehouse(){
        return $this->belongsTo('App\Models\ReserveTreehouse','treehouse_id');
    }
    public function reservedfunctionhall(){
        return $this->belongsTo('App\Models\ReserveFunctionHall','functionhall_id');
    }
    public function reservedpavillionhall(){
        return $this->belongsTo('App\Models\ReservePavillion','pavillionhall_id');
    }


}
