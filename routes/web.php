<?php


use App\Http\Controllers\{
    UserController,
    ArchiveController
};

use Illuminate\Support\Facades\Route;


Route::get('/users', [UserController::class, 'index'])->name('users.index');

Route::get('/users/create', [UserController::class, 'create'])->name('users.create');

Route::get('/users', [UserController::class, 'store'])->name('users.store');

Route::get('/archives/create', [ArchiveController::class, 'create'])->name('archives.create');

Route::get('/archives', [ArchiveController::class, 'index'])->name('archives.index');


Route::get('/', function () {
    return view('welcome');
});
