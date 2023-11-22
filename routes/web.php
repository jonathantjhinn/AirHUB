<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\UserController;
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
    return view('home');
});

// Route::get('/profile', function () {
//     return view('profile');
// });


Route::group(['middleware' => 'alreadyLogin'], function() {
    Route::get('/login', [UserController::class, 'viewlogin'] );
    Route::get('/register', [UserController::class, 'viewregister'] );
});

Route::group(['middleware'=> 'isLogin'], function() {
    Route::get('/profile/{id}', [UserController::class, 'viewprofile'] );
    Route::get('/getbackprofile', [UserController::class, 'getbackprofile'] );
    Route::get('/booking', [BookingController::class,'viewbooking'] );
    Route::post('/filterview', [BookingController::class,'filterview'] );
    Route::get('/dashboard/{email}', [BookingController::class,'viewdashboard'] );
    Route::get('/booking-detail/{listid}', [BookingController::class,'findbookingdetail']);
});


Route::post('/register', [UserController::class, 'createuser'] );
Route::post('/login', [UserController::class, 'checklogin'] );
Route::get('/logout', [UserController::class,'logout'] );
Route::put('/profile/{id}', [UserController::class, 'editprofile'] );
Route::get('/home', [UserController::class,'viewhome'] );
Route::post('/booking-detail/{listid}', [BookingController::class,'addtransaction']);



