<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// route admin
Route::get('/admin', function () {
    return view('dashboard.index');
})->middleware(['auth', 'verified', 'role:admin|operator'])->name('admin');

// route operator
Route::get('/operator', function () {
    return "Operator Page";
})->middleware(['auth', 'verified', 'role:operator'])->name('operator');

Route::get('/sales', function () {
    return "sales Page";
})->middleware(['auth', 'verified', 'role:sales'])->name('sales');

// route user
Route::get('/user', function () {
    return "user Page";
})->middleware(['auth', 'verified', 'permission:view-user']);

Route::get('/courses', function () {
    return view('courses.index');
})->middleware(['auth', 'verified', 'role_or_permission:view-user|admin']);

// Roles
Route::resource('roles', RoleController::class)->middleware(['auth', 'verified', 'role:admin']);


require __DIR__ . '/auth.php';
