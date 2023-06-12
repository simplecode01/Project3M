<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BahanController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\KategoriController;

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

Route::get('/', [WebController::class, 'home']);
Route::get('/kategoriUser', [WebController::class, 'kategori']);
Route::get('/produkUser', [WebController::class, 'produk']);
Route::get('/bahanUser', [WebController::class, 'bahan']);

Route::get('/kategoriUser/{params}', [WebController::class, 'kategoriProduk']);

// Route::get('/bahanUser/{params}', [WebController::class, 'bahanProduk'])->name('bahanUser.show');



Route::resource('/user', UserController::class)->middleware('auth');
Route::resource('/kategori', KategoriController::class)->middleware('auth');
Route::resource('/bahan', BahanController::class)->middleware('auth');
Route::resource('/produk', ProdukController::class)->middleware('auth');


Route::get('/dashboard', function () {
    return view('cms.cms-dashboard.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__ . '/auth.php';
