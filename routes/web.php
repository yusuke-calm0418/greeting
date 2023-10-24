<?php

use App\Http\Controllers\GreetingController;
use GuzzleHttp\Psr7\Message;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('comments/morning', [GreetingController::class, 'morning']);

Route::get('comments/afternoon', [GreetingController::class, 'afternoon']);

Route::get('comments/evening', [GreetingController::class, 'evening']);

Route::get('comments/night', [GreetingController::class, 'night']);

// 自由なメッセージ
Route::get('comments/freeword/{msg}', [GreetingController::class, 'word']);

// ランダムなメッセージ
Route::get('comments/random', [GreetingController::class, 'random']);
