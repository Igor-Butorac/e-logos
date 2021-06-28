<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FullCalenderController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ClientsController;
use App\Models\User;
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
if (User::where("type_of_user","!=", 1)->exists())
{
    Auth::routes([
        'register' => false
    ]);

}

Auth::routes();
Route::group(['middleware' => 'auth'], function () {

Route::get('/','PagesController@index');

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

Route::resource('clients','ClientsController');

Route::get('/clients/create', [ClientsController::class, 'create']);

Route::post('/post', [ClientsController::class, 'store']);

//CALENDAR
Route::get('schedule', [FullCalenderController::class, 'index']);

Route::post('schedule/action', [FullCalenderController::class, 'action']);


});


