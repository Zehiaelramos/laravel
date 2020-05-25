<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
      $this->app->bind('path.public',function(){
<<<<<<< HEAD
        return'/home/u136258067/domains/awplen.com/public_html';
=======
        return'/home/awplen.com/public_html';
>>>>>>> d376a3eb0bef37257358e3ba904017cdfd461f3e
      });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
