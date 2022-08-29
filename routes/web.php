<?php

use App\Http\Controllers\GameController;
use App\Http\Controllers\PickController;
use App\Http\Controllers\PickSummaryController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WeekController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/email/verify', function () {
//    return view('auth.verify-email');
//})->middleware('auth')->name('verification.notice');
//
//Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
//    $request->fulfill();
//
//    return redirect('/home');
//})->middleware(['auth', 'signed'])->name('verification.verify');
//
//Route::post('/email/verification-notification', function (Request $request) {
//    $request->user()->sendEmailVerificationNotification();
//
//    return back()->with('message', 'Verification link sent!');
//})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/current', [PickSummaryController::class, 'current'])->name('current');
    Route::get('/weekly', [PickSummaryController::class, 'weekly'])->name('weekly');
    Route::get('/overall', [PickSummaryController::class, 'overall'])->name('overall');
    Route::resource('/picks', PickController::class);
});

Route::group(['prefix' => '/admin', 'middleware' => ['auth', 'can:admin_area']], function () {
    Route::resource('/games', GameController::class);
    Route::resource('/users', UserController::class);
    Route::resource('/teams', TeamController::class);
    Route::resource('/weeks', WeekController::class);
});

require __DIR__.'/auth.php';
