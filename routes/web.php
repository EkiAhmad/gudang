<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;

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
Route::get('/barang', [BarangController::class, 'get_all_barang']);
Route::post('/barang', [BarangController::class, 'store']);
// Route::post('books', 'Api\BookController@createBook');
// Route::resource('barang', 'App\Http\Controllers\BarangController');

Route::get('/', function () {
    return view('welcome');
});
