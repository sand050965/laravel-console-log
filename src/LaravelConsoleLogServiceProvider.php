<?php

namespace Sand\LaravelConsoleLog;

use Illuminate\Support\Collection;
use Illuminate\Support\ServiceProvider;

class LaravelConsoleLogServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Collection::make(glob(__DIR__ . '/Helpers/*.php'))->mapWithKeys(function ($path) {
            return [$path => pathinfo($path, PATHINFO_FILENAME)];
        })->each(function ($helper, $path) {
            require_once $path;
        });
    }
}
