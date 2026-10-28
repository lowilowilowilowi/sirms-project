
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\StaffController;

// Show login page
Route::get('/', function () {
    return view('auth.login');
})->name('login');

// Handle login and logout
Route::post('/login', [LoginController::class, 'login'])
    ->name('login.submit');

Route::post('/logout', [LoginController::class, 'logout'])
    ->name('logout');

// Student records and staff management require authentication
Route::middleware('auth')->group(function () {
    // Student records
    Route::resource('students', StudentController::class);

    // Only administrators can manage staff accounts
    Route::middleware('admin')->group(function () {
        Route::get('/staff', [StaffController::class, 'index'])
            ->name('staff.index');

        Route::get('/staff/create', [StaffController::class, 'create'])
            ->name('staff.create');

        Route::post('/staff', [StaffController::class, 'store'])
            ->name('staff.store');
    });
});

