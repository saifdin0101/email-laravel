<?php

use App\Http\Controllers\EmailController;
use Illuminate\Support\Facades\Route;

Route::get("/",[EmailController::class , "index"]);
Route::post("store/email",[EmailController::class , "store"])->name('store.email');
