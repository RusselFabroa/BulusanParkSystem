<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class treehouse extends Model
{
    use HasFactory;
    protected $table = "treehouse";

    protected $fillable = [
        'name',
        'description',
        'status',
        'price',
        'treehouse_image',
    ];
}
