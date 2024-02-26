<?php

use App\Http\Controllers\Filament\LogoutController;
use App\Http\Controllers\JetMessages;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ServiceRequestController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Mime\MessageConverter;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/', [PagesController::class, 'home'])->name('home');
Route::get('about', [PagesController::class, 'about'])->name('about');
Route::get('WNlLTIiO31zOjY6Il9mbGU{service}9fa5fb5870e215cb', [PagesController::class, 'service'])->name('service');
Route::get('9fa5fb5870e215cb{project}FzaCI7YTDoyOntzOjM6ImS9s', [PagesController::class, 'project'])->name('project');

// Verified Pages

Route::middleware(['verified', 'auth'])->group(function () {
    Route::resource('mymessages', JetMessages::class);
    Route::post('9fa5fb5870e215cb', [MessageController::class, 'message'])->name('send');
    Route::post('makeorder', [ServiceRequestController::class, 'order'])->name('order');
});

Route::post('/auth/logout', [LogoutController::class, 'logout'])->name('filament.admin.auth.logout');