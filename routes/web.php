<?php

use App\Http\Controllers\DataServisController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\MekanikController;
use App\Http\Controllers\ServisController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\TesController;

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


Auth::routes(
  // ['register'=>false]
);

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/home', function(){return view('pages.home');})->name('home');


Route::group(['middleware' => 'auth'], function () {
    //route Servis
    Route::get('/servis/index', [ServisController::class, 'index']);
    Route::get('/servis/form/{id}', [ServisController::class, 'create']);
    Route::get('/servis/pelanggan/{id}', [ServisController::class, 'perservis']);
    Route::post('/servis/store', [ServisController::class, 'store']);
    Route::get('/servis/edit/{id}', [ServisController::class, 'edit']);
    Route::get('/servis/update/{id}', [ServisController::class, 'selesai']);
    Route::put('/servis/{id}', [ServisController::class, 'update']);
    Route::delete('/servis/{id}', [ServisController::class, 'destroy']);


    
    // Route::get('/servis/sruktur', [ServisController::class, 'sruktur']);


        //route layanan
        Route::get('/layanan/index', [LayananController::class, 'index']);
        Route::get('/layanan/form', [LayananController::class, 'create']);
        Route::post('/layanan/store', [LayananController::class, 'store']);
        Route::get('/layanan/edit/{id}', [LayananController::class, 'edit']);
        Route::put('/layanan/{id}', [LayananController::class, 'update']);
        Route::delete('/layanan/{id}', [LayananController::class, 'destroy']);

      //route mekanik
      Route::get('/mekanik/index', [MekanikController::class, 'index']);
      Route::get('/mekanik/form', [MekanikController::class, 'create']);
      Route::post('/mekanik/store', [MekanikController::class, 'store']);
      Route::get('/mekanik/edit/{id}', [MekanikController::class, 'edit']);
      Route::put('/mekanik/{id}', [MekanikController::class, 'update']);
      Route::delete('/mekanik/{id}', [MekanikController::class, 'destroy']);
      //route pelanggan
      Route::get('/pelanggan/index', [PelangganController::class, 'index']);
      Route::get('/pelanggan/form', [PelangganController::class, 'create']);
      Route::post('/pelanggan/store', [PelangganController::class, 'store']);
      Route::get('/pelanggan/edit/{id}', [PelangganController::class, 'edit']);
      Route::put('/pelanggan/{id}', [PelangganController::class, 'update']);
      Route::delete('/pelanggan/{id}', [PelangganController::class, 'destroy']);
  

       //route Barang
       Route::get('/barang/index', [BarangController::class, 'index']);
       Route::get('/barang/{id}', [BarangController::class, 'destroy']);
        //route transaki
      Route::get('/transaksi/index', [TransaksiController::class, 'index']);
      // Route::get('/transaksi/form', [TransaksiController::class, 'create']);
      Route::post('/transaksi/store', [TransaksiController::class, 'store']);
      Route::post('/bayar/{ID}', [TransaksiController::class, 'bayar']);
      Route::get('/transaksi/form', [TransaksiController::class, 'tambah']);
      Route::get('/transaksi/faktur/{id}', [TransaksiController::class, 'printfaktur']);
      Route::get('/laporan', [LaporanController::class, 'index']);


      Route::get('/tes', [TesController::class, 'index']);
      Route::get('/tesdata', [TesController::class, 'cekdata']);


});
