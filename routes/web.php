<?php

use App\Http\Controllers\SubscriberController;
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
    return view('welcome');
})->name('/');

Route::get('/commits', function () {
    return view('commits');
})->name('commits');

Route::get('/weare', function(){
    return view(('/weare'));
})->name('weare');

Route::get('/coffe', function(){
    return view('coffe');
})->name('coffe');


Route::get('/subscribers/verify/{subscriber}', [SubscriberController::class, 'verify'])
    ->middleware('signed')
    ->name('subscribers.verify');

require __DIR__.'/auth.php';
