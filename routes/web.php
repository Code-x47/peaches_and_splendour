<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Http\Controllers\EventController;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::post("save_email",[EventController::class,"SaveEmail"])->name('save.email');
Route::get('invitees',[EventController::class,"Invitees"]);
Route::get('send_update',[EventController::class,"SendUpdate"]);
Route::put("update",[EventController::class,"UpdateInvitee"]);
Route::post("delete",[EventController::class,"DeleteInvitee"]);

Route::view("/","index")->name('index');

Route::post("save_email",[AppController::class,"SaveEmail"])->name('save.email');
Route::get('invitees',[AppController::class,"Invitees"]);
Route::post('send_update',[AppController::class,"SendUpdate"])->name('send.update');
Route::put("update",[AppController::class,"UpdateInvitee"]);
Route::post("delete",[AppController::class,"DeleteInvitee"]);
Route::get("admin/dashboard",[AppController::class,"Dashboard"]);