<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Response;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        Response::macro('showCates', function ($data, $selected = 0,$parent = 0, $str= '__') {
            foreach ($data as $val) {
                $id = $val['id'];
                $name = $val['name'];
                if($val['parent_id'] == $parent){
                    if($id == $selected){
                        echo "<option value='$id' selected='selected'>$name</option>";
                    }else{
                        echo "<option value='$id'>$name</option>";
                    }                    
                }else{
                    if($id == $selected){
                        echo "<option value='$id' selected='selected'>$str$name</option>";
                    }else{
                        echo "<option value='$id'>$str$name</option>";
                    }
                }
            }
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
