<?php

namespace App\Http\Controllers;

use App\Models\Animals;
use App\Models\cottages;
use App\Models\functionhall;
use App\Models\pavillionhall;
use App\Models\slider;
use App\Models\treehouse;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /** public function __construct()
    {
        $this->middleware('auth');
    }
        */
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $sliders = slider::where('status','0')->get();

        $cottages = cottages::all();
        $treehouses = treehouse::all();
        $functionhalls = functionhall::all();
        $pavillionhalls = pavillionhall::all();
        $animals = Animals::all();
        return view('dashboard-main', compact('sliders','cottages','animals','treehouses','functionhalls','pavillionhalls'));
    }
}
