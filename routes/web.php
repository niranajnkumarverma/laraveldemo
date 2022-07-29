<?php

use App\Http\Controllers\Admincontroller;
use App\Http\Controllers\Homecontroller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Permissionscontroller;
use App\Http\Controllers\Usercontroller;
use App\Http\Controllers\Rolecontroller;


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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [App\Http\Controllers\Homecontroller::class, 'index'])->name('index');


// Route::group(['middleware' => ['auth', 'permission']], function() {
//     /**
//      * Logout Routes
//      */
//     // Route::get('/logout', 'LogoutController@perform')->name('logout.perform');

//     /**
//      * User Routes
//      */
//     Route::group(['prefix' => 'users'], function() {
//         Route::get('/', 'UsersController@index')->name('users.index');
//         Route::get('/create', 'UsersController@create')->name('users.create');
//         Route::post('/create', 'UsersController@store')->name('users.store');
//         Route::get('/{user}/show', 'UsersController@show')->name('users.show');
//         Route::get('/{user}/edit', 'UsersController@edit')->name('users.edit');
//         Route::patch('/{user}/update', 'UsersController@update')->name('users.update');
//         Route::delete('/{user}/delete', 'UsersController@destroy')->name('users.destroy');
//     });

//     /**
//      * User Routes
//      */
//     Route::group(['prefix' => 'clients'], function() {
//         Route::get('/', 'Admincontroller@index')->name('clients.index');
//         Route::get('/create', 'Admincontroller@create')->name('clients.create');
//         Route::post('/create', 'Admincontroller@store')->name('clients.store');
//         Route::get('/{post}/show', 'Admincontroller@show')->name('clients.show');
//         Route::get('/{post}/edit', 'Admincontroller@edit')->name('clients.edit');
//         Route::patch('/{post}/update', 'Admincontroller@update')->name('clients.update');
//         Route::delete('/{post}/delete', 'Admincontroller@destroy')->name('clients.destroy');
//     });
 
// });


Route::resource('users', Homecontroller::class);
Route::resource('clients', Admincontroller::class);
Route::resource('roles', Rolecontroller::class);
Route::resource('permissions', Permissionscontroller::class);

