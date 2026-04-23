<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\crmmail;

Route::get('/sendmail/{name}/{email}/{mobileno}',[crmmail::class,'sendmail']);
Route::get('/sendcareermail/{name}/{email}/{position}/{mobileno}',[crmmail::class,'sendmailcarrer']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
