<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class problem extends Model
{
    use HasFactory;

    protected $table="problems";

    protected $fillable=[
        'users_id',
        'users_name',
        'users_number',
        'problem',
        'status',
        'note',
    ];



}
