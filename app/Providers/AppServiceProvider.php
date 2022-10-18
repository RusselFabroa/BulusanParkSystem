<?php

namespace App\Providers;

use App\Models\Book;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('layouts.sidebar',
            function($view) {
            $countproblem = DB::table('problems')->where('status','=','unresolved')->count();
            $view->with('countproblem',$countproblem);
        });
        view()->composer('layouts.admin.master',
            function($view) {
            $countbook = Book::where('status','!=','Paid')->count();
                $countproblem = DB::table('problems')->where('status','=','unresolved')->count();
                $view->with([
                    'countproblem' => $countproblem,
                    'countbook' => $countbook,
                    ]);
            });

        view()->composer('layouts.front.layout',
        function($view){
            $authname = Auth::User()->name;
            $view->with('authname',$authname);
        });
        view()->composer('layouts.front.layout-action',
            function($view){
                $authname = Auth::User()->name;
                $view->with('authname',$authname);
            });


    }

}
