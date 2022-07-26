<?php

namespace Elcapitano\EmployeeManagement;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class EmployeeManagementServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        $this->loadViewsFrom(__DIR__.'/views', 'employees');
        $this->registerRoutes();
    }

    protected function registerRoutes()
    {
        Route::group($this->routeConfiguration(), function () {
            $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        });
    }

    protected function routeConfiguration()
    {
        return [
            'prefix' => config('employeemanagement.prefix'),
            'middleware' => config('employeemanagement.middleware'),
        ];
    }
}
