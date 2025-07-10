<?php

use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('welcome');
})->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', function () {
        return Inertia::render('dashboard');
    })->name('dashboard');

    // Admin only routes
    Route::middleware(['role:admin'])->group(function () {
        Route::get('admin', function () {
            return Inertia::render('admin/dashboard');
        })->name('admin.dashboard');

        Route::get('admin/users', [UserController::class, 'index'])->name('admin.users');
        Route::patch('admin/users/{user}/role', [UserController::class, 'updateRole'])->name('admin.users.update-role');
    });

    // Broker Editor and Admin routes
    Route::middleware(['role:editor,admin'])->group(function () {
        Route::get('editor', function () {
            return Inertia::render('editor/dashboard');
        })->name('editor.dashboard');
    });
    //user only route
    Route::middleware(['role:user'])->group (function () {
        return Inertia::render('user/dashboard');
    });

});

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
