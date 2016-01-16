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
        view()->composer(['main','main_wo_header_nav','category_items'], function($view)
        {
            //fetch all the categories
            $arrCategory = DB::table('category_master')->get();

            //fetch all the item types
            $arrType = DB::table('type_master')->get();

            foreach ($arrCategory as $key => $category) {
               
                foreach ($arrType as $key1 => $type) {
                    if($type->category == $category->cat_id)
                        $arrTypeCategoryWise[$category->cat_id][] = $type;
                }
            }

            //get category id versus category name array
            $arrCetegory_id_name = getKeyValueArray('cat_id','name',$arrCategory,'object');

            $arrType_id_name = getKeyValueArray('type_id','name',$arrType,'object');
            
            $view->with(compact('arrTypeCategoryWise','arrCategory','arrType','arrCetegory_id_name','arrType_id_name'));
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
