<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'artist'], static function() {
    Route::get('/{id}', App\Http\Controllers\Show\ShowArtistController::class);
    Route::get('/', App\Http\Controllers\Index\ArtistIndexController::class);
    Route::post('/', App\Http\Controllers\Create\CreateArtistController::class);
    Route::put('/{id}', App\Http\Controllers\Update\UpdateArtistController::class);
    Route::delete('/{id}', App\Http\Controllers\Delete\DeleteArtistController::class);
});

Route::get('/artists', App\Http\Controllers\Artist\SearchArtistController::class);
