<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class events extends Model
{
    protected $table = "events";

    protected $fillable = [
        'title',
        'start',
        'end',

    ];
    use HasFactory;
}
