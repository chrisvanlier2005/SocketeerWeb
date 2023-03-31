<?php

use App\Http\Controllers\ChannelController;
use App\Http\Controllers\Dashboard\ApplicationController;
use App\Http\Controllers\Dashboard\IntegrationController;
use App\Http\Controllers\Dashboard\OverviewController;
use App\Http\Controllers\DocumentationController;
use App\Http\Controllers\ProfileController;
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

Route::view("/", "pages.Index")->name("index");

Route::group(["middleware" => 'auth'], function () {
    Route::get('/dashboard', OverviewController::class)->name('dashboard');
    Route::resource("/applications", ApplicationController::class);
    Route::post("/applications/{application}/channels", [ChannelController::class, 'store'])->name("channels.store");
    Route::get("/integrations", [IntegrationController::class, 'index'])->name("integration.index");
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::group(["prefix" => "/documentation", "as" => "documentation."], function () {
    Route::get("/", [DocumentationController::class, 'index'])->name('index');
    Route::get("/{integration}", [DocumentationController::class, 'showIntegration'])->name("show-integration");

});
require __DIR__ . '/auth.php';
