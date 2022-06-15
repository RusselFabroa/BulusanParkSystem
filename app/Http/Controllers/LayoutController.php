<?php

namespace App\Http\Controllers;

use App\Models\functionhall;
use Illuminate\Http\Request;
use DB;

class LayoutController extends Controller
{
    public function count(){
        $countProb=DB::table('problems')->where('status','=','unresolved')->count();
    }



}
