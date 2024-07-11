<?php

use App\Livewire\Calendar;
use Illuminate\Support\Facades\Route;

Route::get('/', Calendar::class)->name('home');
Route::get('/plans', App\Livewire\Plans\Index::class)->name('plans');
Route::get('/plan/{plan}', App\Livewire\Plan\Show::class)->name('plans.show');
Route::get('/plans', App\Livewire\Plans\Index::class)->name('plans');
Route::get('/my-plans', App\Livewire\MyPlans\Index::class)->name('my-plans');





// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });
