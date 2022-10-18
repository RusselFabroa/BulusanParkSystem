<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\Activity;
use App\Models\Animals;
use App\Models\cottages;
use App\Models\functionhall;
use App\Models\pavillionhall;
use App\Models\Review;
use App\Models\slider;
use App\Models\treehouse;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $info = DB::table('aboutus')->first();

        $reviewinfo = Review::with('user')->orderBy('rating','desc')->get();
        $reviewcount = DB::table('reviews')->count();
        $fivestar = DB::table('reviews')->where('rating','5')->count();
        $fourstar = DB::table('reviews')->where('rating','4')->count();
        $threestar = DB::table('reviews')->where('rating','3')->count();
        $twostar = DB::table('reviews')->where('rating','2')->count();
        $onestar = DB::table('reviews')->where('rating','1')->count();

        $fivepercentage = $fivestar / $reviewcount * 100 ;
        $fourpercentage = $fourstar / $reviewcount * 100 ;
        $threepercentage = $threestar / $reviewcount * 100 ;
        $twopercentage = $twostar / $reviewcount * 100 ;
        $onepercentage = $onestar / $reviewcount * 100 ;

        $currentTime = Carbon::now();
        $activities = Activity::where('start','>',$currentTime)->limit(4)->get();

        return view('dashboard-main', compact('sliders', 'cottages','animals','treehouses',
            'functionhalls','pavillionhalls','info','reviewinfo','reviewcount','fivestar','fourstar','threestar','twostar'
        ,'onestar','fivepercentage','fourpercentage','threepercentage','twopercentage','onepercentage','activities'))
            ->with('close','The park is temporary closed!');
    }
}
