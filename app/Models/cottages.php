<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cottages extends Model
{
    use HasFactory;
    protected $table = "cottages";

    protected $fillable = [
        'name',
        'description',
        'availability',
        'price',
        'cottage_image',
    ];
}
