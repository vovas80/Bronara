<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\AliasLoader;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
		  date_default_timezone_set('Europe/Kiev');
      $this->app->booting(function() {
        $loader = AliasLoader::getInstance();
        $loader->alias('Region', \App\Region::class);
        $loader->alias('CaseText', \App\Helpers\CaseText::class);
      });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
    }
}
