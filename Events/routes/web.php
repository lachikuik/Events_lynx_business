<?php

use Inertia\Inertia;
use App\Http\Controllers\EventController;
use App\Models\Event;

Route::get('/user', [EventController::class, 'index']);

Route::get('/', [EventController::class, 'index']);
Route::post('/event', [EventController::class, 'Store']);
Route::post('/event/update/{id}', [EventController::class, 'UpdateEvent']);
Route::delete('/event/delete/{id}', [EventController::class, 'DeleteEvent']);
Route::post('/event/search', [EventController::class,'scopeSearch']);
