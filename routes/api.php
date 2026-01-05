<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::post("save_email",[EventController::class,"SaveEmail"]);
Route::get('invitees',[EventController::class,"Invitees"]);
Route::get('send_update',[EventController::class,"SendUpdate"]);
Route::put("update",[EventController::class,"UpdateInvitee"]);
Route::put("delete",[EventController::class,"DeleteInvitee"]);