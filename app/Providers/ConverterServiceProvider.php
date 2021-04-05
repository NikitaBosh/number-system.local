<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ConverterServiceProvider extends ServiceProvider
{
    /**
     * Register any aplication services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('Converter', 'App\Services\Converter');
    }

}
