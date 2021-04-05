<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;

class ValidationServiceProvider extends ServiceProvider
{
    /**
     * Загрузка сервисов приложения..
     *
     * @return void
     */
    public function boot()
        {
            Validator::extend('octal_number_system', function ($attribute, $value, $parameters, $validator) {
                if (preg_match('/^[0-2]+$/', $value)) {
                    return true;
                } else {
                    return false;
                }
        });
    }
}
