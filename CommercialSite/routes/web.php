<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MessagesController;
use App\Http\Controllers\MessagesInRowController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\IntroductionController;
use App\Http\Controllers\GaleryController;
use App\Http\Controllers\ViewMessageController;
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

Route::get('/', [HomeController::class, 'home'])->name('home');

Route::get('/introduction', [IntroductionController::class, 'introduction'])->name('introduction');
Route::get('/gallery', [GaleryController::class,'gallery'])->name('gallery.index');
Route::get('/send-messages', [MessagesController::class,'messages'])->name('messages.index');
Route::post('/send-messages', [MessagesController::class,'addmsg'])->name('messages.addmsg');
Route::get('/all-messages', [MessagesInRowController::class,'messages_in_row'])->name('messages.all');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/view-messages', [ViewMessageController::class,'view_messages'])->name('view.messages.index');
    Route::post('/gallery', [GaleryController::class,'store'])->name('gallery.store');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
