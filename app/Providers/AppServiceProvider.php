<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\View\View;
use App\OpinionType;
use App\ComplaintType;


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
        
        Schema::defaultStringLength(191);
        view()->composer('*', function(view $view){
            $opinionTypes = OpinionType::all();
            $view->with('opinionTypes' ,$opinionTypes);

            $complaintTypes = ComplaintType::all();
            $view->with('complaintTypes' ,$complaintTypes);
        });

        
    }
}
