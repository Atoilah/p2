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
Auth::routes(
['verify' => true]
);
Route::get('/', function () {
    return redirect(route('awal'));
});
Route::get('/dashboard', [App\Http\Controllers\TamuController::class, 'dashboard'])->name('awal');



Route::middleware(['auth','user-role:user'])->group(function(){
    Route::get('/kamar', [App\Http\Controllers\TamuController::class, 'kamar'])->name('dataKamar');
    Route::get('/fasilitas', [App\Http\Controllers\TamuController::class, 'fasilitas'])->name('dataFasilitas');
    Route::get('/home', [App\Http\Controllers\TamuController::class, 'dashboard'])->name('aku');
    Route::post('home-pesan',[App\Http\Controllers\TransactionController::class, 'store'])->name('pesan');

    Route::get('/pesan/{user}', [App\Http\Controllers\TamuController::class, 'invoice'])->name('list');
    Route::get('/pesan/detail/{kode}', [App\Http\Controllers\TransactionController::class, 'detail'])->name('detail');

    Route::get('/pesan/batal/{id}', [App\Http\Controllers\TransactionController::class, 'batal'])->name('batal');
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
    Route::put('/transaction/batal/{id}', [App\Http\Controllers\TransactionController::class, 'batal'])->name('tolak');
    Route::put('/transaction/terima/{id}', [App\Http\Controllers\TransactionController::class, 'acc'])->name('terima');
    Route::get('/transaction/persetujuan/', [App\Http\Controllers\TransactionController::class, 'persetujuan'])->name('persetujuan');
    Route::get('/transaction/cekIn/', [App\Http\Controllers\TransactionController::class, 'cekIn'])->name('cekIn');
    Route::get('/transaction/cekOut/', [App\Http\Controllers\TransactionController::class, 'cekOut'])->name('cekOut');
    Route::get('/transaction/cancel/', [App\Http\Controllers\TransactionController::class, 'cancel'])->name('cancel');
    Route::get('/transaction/selesai/', [App\Http\Controllers\TransactionController::class, 'selesai'])->name('selesai');
});
