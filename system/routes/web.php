<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepanController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\edukasiController;
use App\Http\Controllers\DeskripsiController;
use App\Http\Controllers\logController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[DepanController::class, 'index']);


Route::controller(AuthController::class)->group( function () {
    Route::get('login','login')->name('login');
    Route::post('loginProses','loginProcess');
    Route::get('register','register');
    Route::post('register/add','create');
    Route::get('logout','logout');
    Route::prefix('user')->group(function(){
        Route::get('/','index');
        Route::get('add','create');
        Route::get('edit','edit');
        Route::get('delete','delete');
        Route::post('add','store');
        Route::post('edit','update');
    });
});
Route::middleware('auth')->group(function(){
    Route::get('layanan',[DepanController::class, 'layanan']);
    Route::get('daftar/{id}',[DepanController::class,'daftar']);
    Route::get('penanganan/{id}',[DepanController::class,'penanganan']);
    Route::post('add/daftar',[DepanController::class,'adddaftar']);
    Route::get('cekPenyakit',[DepanController::class,'cekPenyakit']);
    Route::get('Penyakit',[DepanController::class,'Penyakit']);
    Route::get('tertangani/{id_edukasi}/{id_deskripsi}',[DepanController::class,'tertangani']);
    Route::get('taktertangani/{id_edukasi}/{id_deskripsi}',[DepanController::class,'taktertangani']);
    Route::get('kasus',[DepanController::class, 'kasus']);


    Route::prefix('admin')->group(function(){
        Route::get('dashboard',[DepanController::class, 'dashboard']);
        //edukasi
        Route::prefix('edukasi')->group(function(){
            Route::controller(edukasiController::class)->group(function(){
                Route::get('/','index');
                Route::post('add','create');
                Route::post('edit/{id}','update');
                Route::get('hapus/{id}','hapus');
                Route::get('detail/{id}','detail');
                Route::get('deskripsi/{id}','deskripsi');
                Route::post('deskripsi/add','addDeskripsi');
                Route::get('deskripsi/hapus/{id}','deskripsiHapus');
                Route::post('deskripsi/edit/{id}','deskripsiEdit');
                //penanganan
                Route::post('deskripsi/penanganan/{id}','DesPenanganan');
                //end penanganan
                Route::get('deskripsi/pertanyaan/{id}','pertanyaan');
                Route::post('deskripsi/pertanyaan/add','addPertanyaan');
                Route::get('deskripsi/detail/{id}','deskripsiDetail');
                Route::get('deskripsi/pertanyaan/hapus/{id}','hapusPertanyaan');
                Route::post('deskripsi/pertanyaan/edit/{id}','editPertanyaan');
                Route::get('deskripsi/pertanyaan/status/{id}/{status}','updatePertanyaan');
                
            });
        });
        Route::prefix('log')->group(function(){
            Route::controller(logController::class)->group(function(){
                Route::get('/','index');
                Route::get('notif','logBelum');
                Route::get('hapus/{id}','delete');
                Route::get('bulan','bulan');
            });
        });
        Route::prefix('user')->group(function(){
            Route::controller(AuthController::class)->group(function(){
                Route::get('/','User');
                Route::post('register','create');
                Route::get('hapus/{id}','hapusUser');
                Route::post('edit/{id}','userEdit');
            });
        });
    });

});

