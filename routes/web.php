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


Route::resources([
  'roles' => 'RoleController',
]);

Route::get('/users', 'UserController@index')->name('users.index')->middleware('can:list,App\User');
Route::post('/users', 'UserController@store')->name('users.store')->middleware('can:store,App\User');
Route::get('/users/create', 'UserController@create')->name('users.create')->middleware('can:create,App\User');
Route::get('/users/{user}', 'UserController@show')->name('users.show')->middleware('can:view,user');
Route::get('/users/edit/{user}', 'UserController@edit')->name('users.edit')->middleware('can:edit,user');
Route::put('/users/update/{user}', 'UserController@update')->name('users.update')->middleware('can:update,user');
Route::delete('/users/delete/{user}', 'UserController@destroy')->name('users.destroy')->middleware('can:destroy,user');

Route::get('/operators', 'OperatorController@index')->name('operators.index')->middleware('can:list,App\Operator');
Route::post('/operators', 'OperatorController@store')->name('operators.store')->middleware('can:store,App\Operator');
Route::get('/operators/create', 'OperatorController@create')->name('operators.create')->middleware('can:create,App\Operator');
Route::get('/operators/{operator}', 'OperatorController@show')->name('operators.show')->middleware('can:view,App\Operator,operator');
Route::get('/operators/edit/{operator}', 'OperatorController@edit')->name('operators.edit')->middleware('can:edit,App\Operator,operator');
Route::put('/operators/update/{operator}', 'OperatorController@update')->name('operators.update')->middleware('can:update,App\Operator,operator');
Route::delete('/operators/delete/{operator}', 'OperatorController@destroy')->name('operators.destroy')->middleware('can:destroy,App\Operator,operator');

Route::get('/clients', 'ClientController@index')->name('clients.index')->middleware('can:list,App\Client');
Route::post('/clients', 'ClientController@store')->name('clients.store')->middleware('can:store,App\Client');
Route::get('/clients/create', 'ClientController@create')->name('clients.create')->middleware('can:create,App\Client');
Route::get('/clients/{client}', 'ClientController@show')->name('clients.show')->middleware('can:view,App\Client,client');
Route::get('/clients/edit/{client}', 'ClientController@edit')->name('clients.edit')->middleware('can:edit,App\Client,client');
Route::put('/clients/update/{client}', 'ClientController@update')->name('clients.update')->middleware('can:update,App\Client,client');
Route::delete('/clients/delete/{client}', 'ClientController@destroy')->name('clients.destroy')->middleware('can:destroy,App\Client,client');

Route::get('/professionals', 'ProfessionalController@index')->name('professionals.index')->middleware('can:list,App\Professional');
Route::post('/professionals', 'ProfessionalController@store')->name('professionals.store')->middleware('can:store,App\Professional');
Route::get('/professionals/create', 'ProfessionalController@create')->name('professionals.create')->middleware('can:create,App\Professional');
Route::get('/professionals/{professional}', 'ProfessionalController@show')->name('professionals.show')->middleware('can:view,App\Professional,professional');
Route::get('/professionals/edit/{professional}', 'ProfessionalController@edit')->name('professionals.edit')->middleware('can:edit,App\Professional,professional');
Route::put('/professionals/update/{professional}', 'ProfessionalController@update')->name('professionals.update')->middleware('can:update,App\Professional,professional');
Route::delete('/professionals/delete/{professional}', 'ProfessionalController@destroy')->name('professionals.destroy')->middleware('can:destroy,App\Professional,professional');

Route::get('/categories', 'CategoryController@index')->name('categories.index')->middleware('can:list,App\Category');
Route::post('/categories', 'CategoryController@store')->name('categories.store')->middleware('can:store,App\Category');
Route::get('/categories/create', 'CategoryController@create')->name('categories.create')->middleware('can:create,App\Category');
Route::get('/categories/{category}', 'CategoryController@show')->name('categories.show')->middleware('can:view,category');
Route::get('/categories/edit/{category}', 'CategoryController@edit')->name('categories.edit')->middleware('can:edit,category');
Route::put('/categories/update/{category}', 'CategoryController@update')->name('categories.update')->middleware('can:update,category');
Route::delete('/categories/delete/{category}', 'CategoryController@destroy')->name('categories.destroy')->middleware('can:destroy,category');

Route::get('/enterprises', 'EnterpriseController@index')->name('enterprises.index')->middleware('can:list,App\Enterprise');
Route::post('/enterprises', 'EnterpriseController@store')->name('enterprises.store')->middleware('can:store,App\Enterprise');
Route::get('/enterprises/create', 'EnterpriseController@create')->name('enterprises.create')->middleware('can:create,App\Enterprise');
Route::get('/enterprises/{enterprise}', 'EnterpriseController@show')->name('enterprises.show')->middleware('can:view,enterprise');
Route::get('/enterprises/edit/{enterprise}', 'EnterpriseController@edit')->name('enterprises.edit')->middleware('can:edit,enterprise');
Route::put('/enterprises/update/{enterprise}', 'EnterpriseController@update')->name('enterprises.update')->middleware('can:update,enterprise');
Route::delete('/enterprises/delete/{enterprise}', 'EnterpriseController@destroy')->name('enterprises.destroy')->middleware('can:destroy,enterprise');

Route::get('/services', 'ServiceController@index')->name('services.index')->middleware('can:list,App\Service');
Route::post('/services', 'ServiceController@store')->name('services.store')->middleware('can:store,App\Service');
Route::get('/services/create', 'ServiceController@create')->name('services.create')->middleware('can:create,App\Service');
Route::get('/services/{service}', 'ServiceController@show')->name('services.show')->middleware('can:view,service');
Route::get('/services/edit/{service}', 'ServiceController@edit')->name('services.edit')->middleware('can:edit,service');
Route::put('/services/update/{service}', 'ServiceController@update')->name('services.update')->middleware('can:update,service');
Route::delete('/services/delete/{service}', 'ServiceController@destroy')->name('services.destroy')->middleware('can:destroy,service');

Route::get('/reservations', 'ReservationController@index')->name('reservations.index')->middleware('can:list,App\Reservation');
Route::post('/reservations', 'ReservationController@store')->name('reservations.store')->middleware('can:store,App\Reservation');
Route::get('/reservations/create', 'ReservationController@create')->name('reservations.create')->middleware('can:create,App\Reservation');
Route::get('/reservations/{reservation}', 'ReservationController@show')->name('reservations.show')->middleware('can:view,reservation');
Route::get('/reservations/edit/{reservation}', 'ReservationController@edit')->name('reservations.edit')->middleware('can:edit,reservation');
Route::put('/reservations/update/{reservation}', 'ReservationController@update')->name('reservations.update')->middleware('can:update,reservation');
Route::delete('/reservations/delete/{reservation}', 'ReservationController@destroy')->name('reservations.destroy')->middleware('can:destroy,reservation');


Auth::routes();
