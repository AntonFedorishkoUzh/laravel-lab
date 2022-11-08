<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Telegram\Bot\Laravel\Facades\Telegram;

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
    return view('welcome');
})->name('home');



Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('users', UserController::class);

});
Route::post('/5625426628:AAFZmG2FZdRoNtjiYcvS2sSYwgjnauNXtkI/webhook', function () {
    $update = Telegram::commandsHandler(true);
    return 'ok';
});

require __DIR__.'/auth.php';
