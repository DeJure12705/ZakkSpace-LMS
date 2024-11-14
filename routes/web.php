<?php
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LockerController;
use Illuminate\Support\Facades\Route;

// Welcome page
Route::get('/', function () {
    return view('welcome');
});

Route::get('/adminDashboard', [AdminController::class, 'index'])->name('adminDashboard');
Route::get('/addLockers', [AdminController::class, 'create'])->name('addLockers');
Route::get('/viewLockers', [LockerController::class, 'view'])->name('viewLockers');
Route::get('/assignLockers', [LockerController::class, 'assign'])->name('assignLockers');

