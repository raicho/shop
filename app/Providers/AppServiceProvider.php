<?php

namespace App\Providers;
use Dotenv\Dotenv;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // load admin env file //
        if (file_exists(base_path('.env_admin'))) {
            $dotenv = Dotenv::createMutable(base_path(), '.env_admin');
            $dotenv->load();
        }
    }
}
