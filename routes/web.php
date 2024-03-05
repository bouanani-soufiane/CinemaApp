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
    $genres = \App\Models\Genre::paginate(4);
    return view('home',compact('genres'));
});

Route::get('/dashboard', function () {
    $genres = \App\Models\Genre::orderBy('id', 'asc')->withCount('film')->with('film')->get();
    $rooms = \App\Models\Room::orderBy('id', 'asc')->withCount('zone')->get();
    $zones = \App\Models\Zone::orderBy('id', 'asc')->with('room')->get();
    $films = \App\Models\Film::orderBy('id', 'asc')->with('genre','room')->get();
    $usersCount = \App\Models\User::count();


    $mostReservedFilm = \App\Models\Reservation::select('film_id', DB::raw('COUNT(*) as reservations_count'))
        ->groupBy('film_id')
        ->orderByDesc('reservations_count')
        ->first();

    // Find the details of the most reserved film
    $mostReservedFilmDetails = $mostReservedFilm ? \App\Models\Film::find($mostReservedFilm->film_id) : null;






    return view('admin.dashboard', compact('genres','rooms','zones','films', 'usersCount', 'mostReservedFilm', 'mostReservedFilmDetails'));
});;

Route::resource('/genre', \App\Http\Controllers\GenreController::class);


Route::get('/gg', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

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

Route::get('/mail', [\App\Http\Controllers\TestMail::class, 'index']);
