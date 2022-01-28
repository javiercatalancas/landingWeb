<?php

use App\Http\Controllers\claseVehiculoController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', 'promController@index');
Route::resource('promocion','promController');
Route::post('clasevehiculo','claseVehiculoController@clasevehiculo');
//Route::get('promocion/gracias-promocion', 'promController@redirect');
//Route::get('promocion/{preferencia?}')->name('preferencia');


