<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FacilityRoomController;
use App\Http\Controllers\FacilitysRoomController;
use App\Http\Controllers\FacilityHotelController;

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
    return redirect(route('asu'));
});

// Route::get('/dashboard', function () {
//     return view('tamu.welcome');
// })->name('asu');
// Route::get('kamar', function () {
//     return view('tamu.kamar');
// })->name('tKamar');
// Route::get('fasilitas', function () {
//     return view('tamu.fasilitas');
// })->name('tFasilitas');

Auth::routes(

);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/kamar', [App\Http\Controllers\TamuController::class, 'kamar'])->name('tKamar');
Route::get('/fasilitas', [App\Http\Controllers\TamuController::class, 'fasilitas'])->name('tFasilitas');
Route::get('/dashboard', [App\Http\Controllers\TamuController::class, 'dashboard'])->name('asu');

Route::resource('transaction', TransactionController::class);
Route::resource('adminkamar', RoomController::class);
Route::resource('fasilitas-kamar', FacilityRoomController::class);
Route::resource('fasilitas-hotel', FacilityHotelController::class);
Route::resource('user', UserController::class);

