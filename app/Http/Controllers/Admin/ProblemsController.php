<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\functionhall;
use Illuminate\Http\Request;

class ProblemsController extends Controller
{
    public function listproblem(){
        return view('adminsection.problem-list');
    }
}
