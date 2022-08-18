<?php

use App\Http\Controllers\DataServisController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\MekanikController;
use App\Http\Controllers\ServisController;
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

// Route::get('/', function () {
//     return view('pqhome');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/home', function(){return view('pages.home');})->name('home');


Route::group(['middleware' => 'auth'], function () {
    //route Servis
    Route::get('/servis/index', [ServisController::class, 'index']);
    Route::get('/servis/form', [ServisController::class, 'create']);
    Route::post('/servis/store', [ServisController::class, 'store']);
    Route::get('/servis/edit/{id}', [ServisController::class, 'edit']);
    Route::put('/servis/{id}', [ServisController::class, 'update']);
    Route::delete('/servis/{id}', [ServisController::class, 'destroy']);


      //route mekanik
      Route::get('/mekanik/index', [MekanikController::class, 'index']);
      Route::get('/mekanik/form', [MekanikController::class, 'create']);
      Route::post('/mekanik/store', [MekanikController::class, 'store']);
      Route::get('/mekanik/edit/{id}', [MekanikController::class, 'edit']);
      Route::put('/mekanik/{id}', [MekanikController::class, 'update']);
      Route::delete('/mekanik/{id}', [MekanikController::class, 'destroy']);
  
     

       //route Barang
       Route::get('/barang/index', [BarangController::class, 'index']);
       Route::get('/barang/{id}', [BarangController::class, 'destroy']);
        //route transaki
      Route::get('/transaksi/index', [TransaksiController::class, 'index']);
      Route::get('/transaksi/form', [TransaksiController::class, 'create']);
      Route::post('/transaksi/store', [TransaksiController::class, 'store']);
});
