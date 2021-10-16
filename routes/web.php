<?php

use App\Http\Controllers\SampahController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NasabahController;
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
Route::get('/delete', [SampahController::class, 'delete'])->name('delete');
Route::post('/update/{id}', [SampahController::class, 'update'])->name('update');

Route::resource('nasabah', NasabahController::class);
Route::resource('sampah', SampahController::class);