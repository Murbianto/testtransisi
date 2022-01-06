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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/addcompany', 'HomeController@addcompany');
Route::post('/createcompany', 'HomeController@createcompany');
Route::get('/deletecompany/{id}', 'HomeController@deletecompany');
Route::get('/editcompany/{id}', 'HomeController@editcompany');
Route::post('/updatecompany', 'HomeController@updatecompany');
Route::get('/employees/{id}', 'EmployeesController@index')->name('employees');
Route::get('/addemployees', 'EmployeesController@addemployees');
Route::post('/createemployees', 'EmployeesController@createemployees');
Route::get('/deleteemployees/{id}', 'EmployeesController@deleteemployees');
Route::get('/editemployees/{id}', 'EmployeesController@editemployees');
Route::post('/updateemployees', 'EmployeesController@updateemployees');
Route::get('/exportpdf/{id}', 'EmployeesController@exportpdf');
Route::post('/importexcel', 'AllEmployees@importexcel');
Route::get('/allemployees', 'AllEmployees@index');
