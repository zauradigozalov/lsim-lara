<?php

namespace zauradigozalov\LsimSms;

use Illuminate\Support\ServiceProvider;
use zauradigozalov\LsimSms\Controllers\LsimController;

class LsimServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadTranslationsFrom(__DIR__ . '/../resources/lang', 'LsimSms');

        $this->publishes([
            __DIR__ . '/../config/lsim-sms.php' => config_path('lsim-sms.php'),
        ],'laravel-lsim-config');

        $this->publishes([
            __DIR__ . '/../resources/lang' => resource_path('lang/vendor/laravel_lsim'),
        ],'laravel-lsim-translations');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('zauradigozalov\LsimSms\Controllers\LsimController');

        $this->mergeConfigFrom(
            __DIR__ . '/../config/lsim-sms.php', 'lsim-sms'
        );

        $this->app->singleton('lsim-sms', function ($app) {
            return new LsimController();
        });
    }
}