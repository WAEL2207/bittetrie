<?php

use App\Http\Controllers\Api\Auth\AdministrateurAuthController;
use App\Http\Controllers\Api\Auth\OrganisateurAuthController;
use App\Http\Controllers\Api\Auth\ClientAuthController;
use Illuminate\Support\Facades\Route;


// Routes pour authentication client
Route::prefix('client')->name('client.')->group(function () {
    Route::post('login', [ClientAuthController::class, 'login']);
    Route::get('login', [ClientAuthController::class, 'login']);

    Route::post('logout', [ClientAuthController::class, 'logout']);
    Route::get('logout', [ClientAuthController::class, 'logout']);

});

// Routes pour authentication organisateur
Route::prefix('organisateur')->name('organisateur.')->group(function () {
    Route::post('login', [OrganisateurAuthController::class, 'login']);
    Route::get('login', [OrganisateurAuthController::class, 'login']);

    Route::post('logout', [OrganisateurAuthController::class, 'logout']);
    Route::get('logout', [OrganisateurAuthController::class, 'logout']);

});

// Routes pour l'authentification administrateur
Route::prefix('administrateur')->name('administrateur.')->group(function () {
    Route::post('login', [AdministrateurAuthController::class, 'login']);
    Route::get('login', [AdministrateurAuthController::class, 'login']);

    Route::post('logout', [AdministrateurAuthController::class, 'logout']);
    Route::get('logout', [AdministrateurAuthController::class, 'logout']);

});
