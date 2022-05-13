<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TanamanController;

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

// Route::get('/tanaman', 'TanamanController@index');
// Route::get('/test', 'TanamanController@show');

Route::get('/', [TanamanController::class, 'show']);
Route::get('/list', [TanamanController::class, 'tanaman']);

