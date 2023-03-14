<?php

use Illuminate\Support\Facades\{Route, Auth};
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
    return redirect(route('awal'));
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
Route::get('/listKamar', [App\Http\Controllers\TamuController::class, 'kamar'])->name('tKamar');
Route::get('/listFasilitas', [App\Http\Controllers\TamuController::class, 'fasilitas'])->name('tFasilitas');
Route::get('/dashboard', [App\Http\Controllers\TamuController::class, 'dashboard'])->name('awal');



Route::middleware(['auth','user-role:user'])->group(function(){
    Route::get('/kamar', [App\Http\Controllers\TamuController::class, 'kamar'])->name('dataKamar');
    Route::get('/fasilitas', [App\Http\Controllers\TamuController::class, 'fasilitas'])->name('dataFasilitas');
    Route::get('/welcome', [App\Http\Controllers\TamuController::class, 'dashboard'])->name('asu');
    Route::post('welcome-pesan',[App\Http\Controllers\TransactionController::class, 'store'])->name('pesan');
});

Route::middleware(['auth','user-role:admin'])->group(function(){
    // Route::resource('transaction', TransactionController::class);
    Route::resource('adminkamar', RoomController::class);
    Route::delete('adminkamar/selectDel/{$id}', [App\Http\Controllers\RoomController::class, 'delete'])->name('roomaal');
    // Route::put('/adminkamar/{}', [RoomController::class, 'update']);
    Route::resource('fasilitas-kamar', FacilityRoomController::class);
    Route::resource('fasilitaskamar', FacilitysRoomController::class);
    Route::resource('fasilitas-hotel', FacilityHotelController::class);
    Route::resource('user', UserController::class);
});

Route::middleware(['auth','user-role:resepsionis'])->group(function(){
    Route::resource('transaction', TransactionController::class);
    // Route::resource('adminkamar', RoomController::class);
    // Route::delete('adminkamar/selectDel/{$id}', [App\Http\Controllers\RoomController::class, 'delete'])->name('roomaal');
    // // Route::put('/adminkamar/{}', [RoomController::class, 'update']);
    // Route::resource('fasilitas-kamar', FacilityRoomController::class);
    // Route::resource('fasilitaskamar', FacilitysRoomController::class);
    // Route::resource('fasilitas-hotel', FacilityHotelController::class);
    // Route::resource('user', UserController::class);
});
