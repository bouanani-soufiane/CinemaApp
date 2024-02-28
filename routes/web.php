<?php

use App\Http\Controllers\Auth\poviderController;
use App\Http\Controllers\HomeController;
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

Route::get('/',[HomeController::class,'index']);
Route::get('/search',[HomeController::class,'search'])->name('film.search');



Route::resource('/genre', \App\Http\Controllers\GenreController::class);

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/dashboard', function () {
        $genres = \App\Models\Genre::all();
        $rooms = \App\Models\Room::all();
        $zones = \App\Models\Zone::all();
        return view('admin.dashboard', compact('genres', 'rooms', 'zones'));
});
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/auth/google/redirect', [poviderController::class, 'redirect'])->name('auth.provider.redirect');
Route::get('/auth/google/callback', [poviderController::class, 'callbackgoogle'])->name('auth.provider.callback');




require __DIR__ . '/auth.php';
Route::resource('/actor', \App\Http\Controllers\ActorController::class);
Route::resource('/film', \App\Http\Controllers\FilmController::class);
Route::resource('/notification', \App\Http\Controllers\NotificationController::class);
Route::resource('/reservation', \App\Http\Controllers\ReservationController::class);
Route::resource('/room', \App\Http\Controllers\RoomController::class);
Route::resource('/seat', \App\Http\Controllers\SeatController::class);
Route::resource('/ticket', \App\Http\Controllers\TicketController::class);
Route::resource('/zone', \App\Http\Controllers\ZoneController::class);

Route::get('/fetch', [\App\Http\Controllers\FetchFilmController::class, 'fetchApiMovie']);
Route::post('/zoneAjax', [\App\Http\Controllers\ZoneController::class, 'storeAjax']);
