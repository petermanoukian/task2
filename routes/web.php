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



Route::get('/', array('uses' => 'ServiceController@index', 'as' => 'MyHomeService.route'));
Route::get('/service/', array('uses' => 'ServiceController@index', 'as' => 'MyHomeService.route'));




Route::get('/service/create', 'ServiceController@create');
Route::post('/service/add', 'ServiceController@store');

Route::get('/service/edit/{id}', array('uses' => 'ServiceController@edit', 'as' => 'ServiceUpdating.route'));

Route::post('/service/update/{id}',array('uses' => 'ServiceController@update', 'as' => 'ServiceUpdate.route'));

Route::put('/service/update/{id}',array('uses' => 'ServiceController@update', 'as' => 'ServiceUpdate.route'));

Route::patch( '/service/update/{id}',array('uses' => 'ServiceController@update', 'as' => 'ServiceUpdate.route'));


Route::match(['put', 'patch'], '/service/update/{id}',array('uses' => 'ServiceController@update', 'as' => 'ServiceUpdate.route'));

Route::post( '/service/update/{id}',array('uses' => 'ServiceController@update', 'as' => 'ServiceUpdate.route'));


Route::delete('service/{id}',array('uses' => 'ServiceController@destroy', 'as' => 'MyDelService.route'));






Route::get('/account/', array('uses' => 'AccountController@index', 'as' => 'MyHomeAccount.route'))->where('id', '[0-9]+');

Route::get('/account/byservice/{service_id?}', array('uses' => 'AccountController@index', 'as' => 'MyHomeByService.route'))->where('id', '[0-9]+');

//Route::get('/account/create', 'AccountController@create');
//Route::get('/account/create/{service_id?}', 'AccountController@create');


Route::get('/account/create', array('uses' => 'AccountController@create', 'as' => 'MyHomeNewOkAccount.route'));

Route::get('/account/create/{service_id?}', array('uses' => 'AccountController@create', 'as' => 'MyHomeNewAccountByService.route'))->where('service_id', '[0-9]+');



Route::post('/account/add'
	,array('uses' => 'AccountController@store', 'as' => 'AddAccountImaged.route')	   
		   
		   
		   );

Route::get('/account/edit/{id}', array('uses' => 'AccountController@edit', 'as' => 'AccountUpdatinghere.route'));
Route::get('/account/show/{id}', array('uses' => 'AccountController@show', 'as' => 'AccountShow.route'));

Route::post('/account/update/{id}',array('uses' => 'AccountController@update', 'as' => 'AccountUpdate.route'));

Route::put('/account/update/{id}',array('uses' => 'AccountController@update', 'as' => 'AccountUpdate.route'));

Route::patch( '/account/update/{id}',array('uses' => 'AccountController@update', 'as' => 'AccountUpdate.route'));


Route::match(['put', 'patch'], '/account/update/{id}',array('uses' => 'AccountController@update', 'as' => 'AccountUpdate.route'));

//Route::post( '/account/update/{id}',array('uses' => 'AccountController@update', 'as' => 'AccountUpdate.route'));


Route::delete('account/{id}',array('uses' => 'AccountController@destroy', 'as' => 'MyDelAccount.route'));
