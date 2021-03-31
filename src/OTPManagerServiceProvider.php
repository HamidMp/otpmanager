<?php


namespace HamidMp\OTPManager;


use Closure;
use Illuminate\Support\ServiceProvider;

class OTPManagerServiceProvider extends ServiceProvider
{

    public function boot()
    {

        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

        $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'otpmanager');

        $this->publishes(

            [
                //config
                __DIR__.'/../config/otpmanager.php'=>config_path('otpmanager.php'),

                // Translations
                //__DIR__.'/../resources/lang' => resource_path('lang/vendor/otpmanager'),
                __DIR__.'/../resources/lang' => resource_path('lang'),

                // middleware
                __DIR__.'/../Http/Middleware' => app_path('/Http/Middleware'),

                // migrations
                //__DIR__.'/../database/migrations' => database_path('migrations/2021_03_28_000000_create_otp_table.php'),


            ]
            ,'otpmanager'
        );

    }

    public function register()
    {
        parent::register(); // TODO: Change the autogenerated stub
    }

}