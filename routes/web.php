<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminProfileController;
use App\Http\Controllers\Auth\RegisteredUserController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified', 'user'])->name('dashboard');

Route::get('/', [HomeController::class, 'welcome']); // Routes to show a welcomepages

Route::middleware('auth')->group(function () {
   
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/admin/profile', [AdminProfileController::class, 'edit'])->name('admin.profile.edit');
    Route::patch('/admin/profile', [AdminProfileController::class, 'update'])->name('admin.profile.update');
    Route::delete('/admin/profile', [AdminProfileController::class, 'destroy'])->name('admin.profile.destroy');
});

require __DIR__.'/auth.php';

// Route::get('/dashboard', [HomeController::class, 'user_dashboard'])
// ->middleware(['auth', 'verified', 'user'])->name('dashboard');  // Routes to show users dashboard

Route::get('admin/dashboard', [HomeController::class, 'index'])
->middleware(['auth', 'verified', 'admin'])->name('dashboard');  // Routes to show administrator dashboard

Route::get('admin/registered_accounts', [RegisteredUserController::class, 'list_account'])
->middleware(['auth', 'verified', 'admin']); // used to show administrator dashboard users accounts registered

Route::delete('user/{id}', [RegisteredUserController::class, 'destroy'])->middleware(['auth', 'admin']); // delete a users accounts registered in administrator dashboard
Route::get('view-user/{id}', [RegisteredUserController::class, 'viewaccount'])->middleware(['auth', 'admin']); //view individual users accounts registered in administrator dashboard
