<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pavillionhall extends Model
{
    use HasFactory;
    protected $table = "pavillionhalls";

    protected $fillable = [
        'name',
        'description',
        'status',
        'price',
        'pavillionhall_image',
    ];
}
