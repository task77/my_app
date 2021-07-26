<?php

Route::get('guest', 'Auth\LoginController@guestLogin')->name('login.guest');
Route::get('/', 'EmployeesController@index');

Route::get('/employee.search', 'EmployeesController@search')->name('employee.search');

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::resource('index', 'EmployeesController', ['only' => ['index']]);
    Route::resource('employee_create', 'EmployeesController');
});