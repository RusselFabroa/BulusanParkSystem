<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class functionhall extends Model
{
    use HasFactory;
    protected $table = "functionhalls";

    protected $fillable = [
        'name',
        'description',
        'status',
        'price',
        'functionhall_image',
    ];
}
