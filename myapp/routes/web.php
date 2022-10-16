<?php

use App\Http\Controllers\musicQuestionController;
use App\Http\Controllers\musicResultController;
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
// 始まりの画面のルーティング
Route::get('/start', [musicQuestionController::class, 'getStart'])->name('start');

// 問1のルーティング
Route::get('/feel', [musicQuestionController::class, 'getFeel'])->name('feel');

// 問2のルーティング
Route::get('/light', [musicQuestionController::class, 'getLight'])->name('light');
Route::get('/dark', [musicQuestionController::class, 'getDark'])->name('dark');

// 問3の画面のルーティング
Route::get('/light/high', [musicQuestionController::class, 'getLightHigh'])->name('lightHigh');
Route::get('/light/slow', [musicQuestionController::class, 'getLightSlow'])->name('lightSlow');
Route::get('/dark/high', [musicQuestionController::class, 'getDarkHigh'])->name('darkHigh');
Route::get('/dark/slow', [musicQuestionController::class, 'getDarkSlow'])->name('darkSlow');

// 結果画面のルーティング
Route::get('/light/high/lirics', [musicResultController::class, 'getLightHighLiricsResult'])->name('lightHighLiricsResult');
Route::get('/light/high/nolirics', [musicResultController::class, 'getLightHighNoLiricsResult'])->name('lightHighNoLiricsResult');
Route::get('/light/slow/lirics', [musicResultController::class, 'getLightSlowLiricsResult'])->name('lightSlowLiricsResult');
Route::get('/light/slow/nolirics', [musicResultController::class, 'getLightSlowNoLiricsResult'])->name('lightSlowNoLiricsResult');
Route::get('/dark/high/lirics', [musicResultController::class,'getDarkHighLiricsResult'])->name('darkHighLiricsResult');
Route::get('/dark/high/nolirics', [musicResultController::class, 'getDarkHighNoLiricsResult'])->name('darkHighNoLiricsResult');
Route::get('/dark/slow/lirics', [musicResultController::class, 'getDarkSlowLiricsResult'])->name('darkSlowLiricsResult');
Route::get('/dark/slow/nolirics', [musicResultController::class, 'getDarkSlowNoLiricsResult'])->name('darkSlowNoLiricsResult');
