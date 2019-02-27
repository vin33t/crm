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

Route::get('/test', function () {
    return view('employee.create');
});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/employees',[
			'uses'=> 'EmployeeController@index',
			'as'=>'employees'
		]);
Route::get('/employee/create',[
			'uses'=> 'EmployeeController@create',
			'as'=>'employee.create'
		]);
Route::post('/employee/store',[
			'uses'=> 'EmployeeController@store',
			'as'=>'employee.store'
		]);



Route::get('/clients',[
			'uses'=> 'ClientController@index',
			'as'=>'clients'
		]);
Route::get('/client/create',[
			'uses'=> 'ClientController@create',
			'as'=>'client.create'
		]);
Route::post('/client/store',[
			'uses'=> 'ClientController@store',
			'as'=>'client.store'
		]);
Route::get('/client/edit/{id}',[
			'uses'=> 'ClientController@edit',
			'as'=>'client.edit'
		]);
Route::post('/client/update/{id}',[
			'uses'=> 'ClientController@update',
			'as'=>'client.update'
		]);
Route::get('/client/destroy/{id}',[
			'uses'=> 'ClientController@destroy',
			'as'=>'client.destroy'
		]);