<?php

use App\Http\Controllers\Auth\poviderController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

use function PHPUnit\Framework\callback;

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

Route::get('/', function () {
    return view('home');
});
Route::get('/dashboard', function () {
    $genres = \App\Models\Genre::all();
    return view('admin.dashboard', compact('genres'));
});

Route::resource('/genre', \App\Http\Controllers\GenreController::class);


Route::get('/gg', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/auth/{provider}/redirect', [poviderController::class, 'redirect']);

Route::get('/auth/{provider}/callback', [poviderController::class, 'callback']);



require __DIR__ . '/auth.php';
