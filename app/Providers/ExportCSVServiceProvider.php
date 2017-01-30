<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App;

class ExportCSVServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
	    App::bind('export', function()
	    {
		    return new \App\lib\Export;
	    });
    }
}
