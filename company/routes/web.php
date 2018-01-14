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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/admin/company', "CompanyController@index");
Route::get('/admin/company/create', "CompanyController@create");
Route::post('/admin/company/create', "CompanyController@postCreate");
Route::get('/admin/company/{id}/edit', "CompanyController@edit");
Route::post('/admin/company/{id}/edit', "CompanyController@postEdit");
Route::post('/admin/company/{id}/delete', "CompanyController@postDelete");