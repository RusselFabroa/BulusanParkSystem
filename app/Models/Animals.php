<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use mysql_xdevapi\Table;

class Animals extends Model
{
    use HasFactory;

    protected $table="animals";

    protected $fillable=[
        'name',
        'description',
        'animals_image',
    ];
}
