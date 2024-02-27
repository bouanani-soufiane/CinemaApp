<?php

use App\Http\Controllers\Auth\poviderController;
use App\Http\Controllers\ProfileController;
use App\Models\Film;
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
    $genres = \App\Models\Genre::paginate(4);
    return view('home',compact('genres'));
});

Route::get('/dashboard', function () {
    $genres = \App\Models\Genre::all();
    $rooms = \App\Models\Room::all();
    $zones = \App\Models\Zone::all();
    $films = \App\Models\Film::all();   
    return view('admin.dashboard', compact('genres','rooms','zones','films'));
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

Route::get('/auth/{provider}/redirect', [PoviderController::class, 'redirect'])->name('auth.provider.redirect');
Route::get('/auth/{provider}/callback', [PoviderController::class, 'callback'])->name('auth.provider.callback');




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
