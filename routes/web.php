<?php

Route::get('/', 'EmployeesController@index');

Auth::routes();

Route::get('index', 'HomeController@index')->name('index');

Route::group(['middleware' => 'auth'], function () {
    Route::resource('index', 'EmployeesController', ['only' => ['index']]);
    Route::resource('employee_create', 'EmployeesController');
});