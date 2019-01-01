<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/test', function () {
//    return view('test');
//});
//

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware'=>'auth'], function () {

    Route::get('/test', 'HomeController@test')->name('test');


    Route::resource('admin/company', 'CompanyController', ['names' => [
        'index' => 'admin.company.index',
        'create' => 'admin.company.create',
        'store' => 'admin.company.store',
        'edit' => 'admin.company.edit',
    ]]);

    Route::resource('admin/employee', 'EmployeeController', ['names' => [
        'index' => 'admin.employee.index',
        'create' => 'admin.employee.create',
        'store' => 'admin.employee.store',
        'edit' => 'admin.employee.edit',
    ]]);

});
