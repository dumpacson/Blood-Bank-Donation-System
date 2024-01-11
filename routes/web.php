<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\ListAppointmentController;
use App\Http\Controllers\DonorController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\BloodBagController;
use App\Http\Controllers\DonorsController;

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
    return view('mainpage');
});

Route::get('/homepage', function () {
    return view('homepage');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


// Route::get('/appointment', function () {
//     return view('appointment');
// });

// Route::get('/doctor', function () {
//     return view('doctor');
// });


//qoys
Route::get('list-appointment', [ListAppointmentController::class, 'index']);


Route::post('/appointment/submit', [AppointmentController::class, 'submit'])->name('submit');

Route::resource('/appointment',AppointmentController::class);
Route::resource('/list-appointment',ListAppointmentController::class);

//safwan

Route::resource('/donation', DonationController::class);
Route::resource('/blood-bag', BloodBagController::class);
// Route::resource('blood_bags', 'BloodBagController');

Route::get('/add-donation', function () {
    return view('add-donation');
});
Route::get('/add-blood', function () {
    return view('add-blood');
});

Route::get('donation', [DonationController::class, 'index']);
Route::resource('adddonation', DonationController::class);
Route::get('bloodbag', [BloodBagController::class, 'index']);
Route::resource('addblood', BloodBagController::class);
Route::resource('edit', 'BloodBagController');


// hazim

Route::resource('/donor', DonorController::class);
Route::get('/add-donor', function () {
    return view('add-donor');
});

Route::get('donor', [DonorController::class, 'index']);
Route::resource('adddonor', DonorController::class);



Route::get('/donors', function () {
    return view('donors');
});

Route::get('/donorpage', function () {
    return view('donorpage');
});


Route::get('donors',[donorsController::class, 'index']);
Route::resource('/donors', donorsController::class);



// Route::post('/login', [Auth\LoginController::class, 'login'])->middleware('doctorusername');


// Route::middleware(['role:admin'])->group(function () {
//     Route::get('/admin', 'AdminController@index');
// });
