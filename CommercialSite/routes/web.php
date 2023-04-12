<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\IntroductionController;
use App\Http\Controllers\GaleryController;
use Illuminate\Support\Facades\Route;

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

//Original Route for home page
/*Route::get('/', function () {
    return view('home');
});*/

Route::get('/', [HomeController::class, 'home']);

Route::get('/introduction', [IntroductionController::class, 'introduction'])->name('introduction');
Route::get('/gallery', [GaleryController::class,'gallery'])->name('gallery.index');
Route::post('/gallery', [GaleryController::class,'store'])->name('gallery.store');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
