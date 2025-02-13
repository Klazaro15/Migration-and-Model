<?php

use App\Http\Controllers\GreetController;
use App\Http\Controllers\TaskController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return 'test';
});

Route::get('/Welcome', [GreetController::class, 'greetPage']);

Route::resource('tasks', TaskController::class);
