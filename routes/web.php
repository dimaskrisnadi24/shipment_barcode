<?php

use App\Http\Controllers\SampahController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NasabahController;
use App\Http\Controllers\TransaksiController;
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

Route::get('/', function () {
    return redirect("/home");
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/home', [HomeController::class, 'index'])->middleware(['auth']);

//sampah
Route::get('/sampah', [SampahController::class, 'index'])->middleware(['auth']);
Route::get('/tambahsampah', [SampahController::class, 'tambahsampah'])->name('tambahsampah');
Route::post('/insertdata', [SampahController::class, 'insertdata'])->name('insertdata');
Route::get('/edit/{id}', [SampahController::class, 'edit'])->name('edit');
Route::get('/delete/{id}', [SampahController::class, 'destroy'])->name('delete');
Route::post('/update/{id}', [SampahController::class, 'update'])->name('update');
Route::get('/cetaklaporansampah', [SampahController::class, 'cetaklaporansampah'])->name('cetaklaporansampah');
Route::get('/hargasampah', [SampahController::class, 'hargasampah'])->name('hargasampah');

//nasabah
Route::get('/cetaklaporannasabah', [Nasabahcontroller::class, 'cetaklaporannasabah'])->name('cetaklaporannasabah');
Route::get('/edit_nasabah/{id}', [NasabahController::class, 'edit_nasabah'])->name('edit_nasabah');
Route::get('/editnasabah', [NasabahController::class, 'editnasabah'])->name('editnasabah');
Route::get('/nasabahdelete/{id}', [NasabahController::class, 'nasabahdelete'])->name('nasabahdelete');
Route::post('/nasabahupdate/{id}', [NasabahController::class, 'nasabahupdate'])->name('nasabahupdate');

Route::resource('nasabah', NasabahController::class);
Route::resource('sampah', SampahController::class);

//transaksi
//Route::get('/transaksi', [TransaksiController::class, 'index'])->middleware(['auth']);
//Route::get('/transaksibaru', [TransaksiController::class, 'transaksibaru'])->name('transaksibaru');
Route::get('/transaksi_json', [TransaksiController::class, 'transaksi_json'])->middleware(['auth']);
Route::get('/transaksi', [TransaksiController::class, 'index'])->middleware(['auth']);
Route::resource('transaksi', TransaksiController::class);