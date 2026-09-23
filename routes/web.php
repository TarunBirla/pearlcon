<?php

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
use App\Http\Controllers\ContactController;
use App\Http\Controllers\RegistrationRequestController;
use App\Http\Controllers\ChatbotController;

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact', [ContactController::class, 'store'])
    ->name('contact.store');

// Registration Request page
Route::get('/registration-request', function () {
    return view('request');
})->name('registration.request');

Route::post(
    '/registration-request',
    [RegistrationRequestController::class, 'store']
)->name('registration.request.store');

Route::get('/', function () {
    return view('home');
});
Route::get('/our-products', function () {
    return view('ourproduct');
});

Route::get('/brands', function () {
    return view('brands');
})->name('brands');

Route::get('/clients', function () {
    return view('clients');
})->name('clients');

// Chatbot Submit Route
Route::post('/chatbot-submit', [ChatbotController::class, 'store'])
    ->name('chatbot.submit');

/*
|--------------------------------------------------------------------------
| Secret Admin Panel Routes (/pearlcon-admin-secure)
|--------------------------------------------------------------------------
*/
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\AdminRequestsController;
use App\Http\Controllers\Admin\AdminAnalyticsController;

Route::prefix('pearlcon-admin-secure')->group(function () {
    // Secret One-Click Database Setup & Migration Route
    Route::get('/run-migrations', function () {
        try {
            \Illuminate\Support\Facades\Artisan::call('migrate', ['--force' => true]);
            $migrateOutput = \Illuminate\Support\Facades\Artisan::output();

            \Illuminate\Support\Facades\Artisan::call('db:seed', [
                '--class' => 'AdminUserSeeder',
                '--force' => true
            ]);
            $seedOutput = \Illuminate\Support\Facades\Artisan::output();

            return response("<div style='font-family: sans-serif; padding: 30px; line-height: 1.6; max-width: 800px; margin: 40px auto; border: 1px solid #10b981; border-radius: 10px; background: #ecfdf5; color: #065f46;'>"
                . "<h2 style='margin-top:0; color:#047857;'>✅ Database Migration & Admin Seeding Completed Successfully!</h2>"
                . "<p><strong>Migrate Output:</strong></p><pre style='background:#ffffff; padding:15px; border-radius:6px; border:1px solid #a7f3d0;'>" . e($migrateOutput ?: 'Already up to date.') . "</pre>"
                . "<p><strong>Seeder Output:</strong></p><pre style='background:#ffffff; padding:15px; border-radius:6px; border:1px solid #a7f3d0;'>" . e($seedOutput ?: 'Seeded successfully.') . "</pre>"
                . "<p style='margin-top:20px;'><a href='" . route('admin.login') . "' style='display:inline-block; background:#047857; color:#fff; text-decoration:none; padding:10px 20px; border-radius:6px; font-weight:bold;'>Go to Admin Login Page &rarr;</a></p>"
                . "</div>");
        } catch (\Throwable $e) {
            return response("<div style='font-family: sans-serif; padding: 30px; line-height: 1.6; max-width: 800px; margin: 40px auto; border: 1px solid #ef4444; border-radius: 10px; background: #fef2f2; color: #991b1b;'>"
                . "<h2 style='margin-top:0; color:#b91c1c;'>❌ Migration Failed!</h2>"
                . "<p><strong>Error Details:</strong></p><pre style='background:#ffffff; padding:15px; border-radius:6px; border:1px solid #fca5a5;'>" . e($e->getMessage()) . "</pre>"
                . "</div>", 500);
        }
    })->name('admin.run_migrations');

    // Secret Login Routes
    Route::get('/', [AdminAuthController::class, 'showLoginForm'])->name('admin.login')->middleware('guest:admin');
    Route::post('/login', [AdminAuthController::class, 'login'])->name('admin.login.submit')->middleware('guest:admin');

    // Protected Admin Routes
    Route::middleware('auth:admin')->group(function () {
        Route::get('/dashboard', function () {
            return redirect()->route('admin.requests');
        })->name('admin.dashboard');

        // Requests Management
        Route::get('/requests', [AdminRequestsController::class, 'index'])->name('admin.requests');
        Route::post('/requests/{id}/status', [AdminRequestsController::class, 'updateStatus'])->name('admin.requests.status');
        Route::get('/requests/export', [AdminRequestsController::class, 'exportCsv'])->name('admin.requests.export');

        // Visit Analytics
        Route::get('/analytics', [AdminAnalyticsController::class, 'index'])->name('admin.analytics');

        // Logout
        Route::post('/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');
    });
});




