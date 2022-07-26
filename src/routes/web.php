<?php

use Illuminate\Support\Facades\Route;
//use Elcapitano\Employeemanagement\Http\Controllers\EmployeeController;


Route::group(['namespace'=>'Elcapitano\Employeemanagement\Http\Controllers'], function(){
    Route::resource('employees', EmployeeController::class);  
});