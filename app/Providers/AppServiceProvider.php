<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App;
use DB;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('main', function($view)
        {
            //fetch all the categories
            $arrCategory = DB::table('category_master')->get();

            //fetch all the item types
            $arrType = DB::table('type_master')->get();

            //get category id versus category name array
            $arrCetegory_id_name = getKeyValueArray('cat_id','name',$arrCategory,'object');

            $arrType_id_name = getKeyValueArray('type_id','name',$arrType,'object');
            
            $view->with(compact('arrCategory','arrType','arrCetegory_id_name','arrType_id_name'));
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
