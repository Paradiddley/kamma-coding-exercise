<?php

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
})->name('home');

Route::inertia('/part-one', 'PartOne');

Route::prefix('/part-two')->group(function () {
    Route::inertia('/', 'PartTwo')->name('part.two');
    Route::post('/submit', \App\Actions\SubmitShareDealForm::class);
});
