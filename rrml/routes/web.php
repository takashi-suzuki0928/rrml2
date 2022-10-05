<?php

use App\Http\Controllers\InterviewController;
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
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// 仮index
Route::get('reserve/index', [InterviewController::class, 'index']);

Route::get('reserve/interview', [InterviewController::class, 'create']);
Route::post('reserve/interview', [InterviewController::class, 'store'])
->name('interview_store');

//Route::get('reserve/interview', [InterviewController::class, 'create']);

// ★認証済みのみOK
Route::get('reserve/interview', [InterviewController::class, 'create'])
->middleware(['auth', 'verified']);

Route::get('reserve/interview/show/{id}', [InterviewController::class, 'show'])
->name('interview_show');

Route::get('reserve/interview/edit/{id}', [InterviewController::class, 'edit'])
->name('interview_edit');

require __DIR__.'/auth.php';
