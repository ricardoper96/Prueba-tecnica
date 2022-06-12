<?php

namespace App\Providers;

use App\Http\Repositories\LibroRepository;
use App\Http\Services\LibroService;
use Illuminate\Support\ServiceProvider;

class RegiterServicesProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(LibroService::class, LibroRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
