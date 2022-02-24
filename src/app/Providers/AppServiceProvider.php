<?php

namespace App\Providers;

use App\Services\ProfessionalServices;
use App\Services\ProfessionalServicesInterface;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use URL;

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
		URL::forceScheme('https');

		$this->app->bind(ProfessionalServicesInterface::class, ProfessionalService::class);
        
		Schema::defaultStringLength(191);
    }
}
