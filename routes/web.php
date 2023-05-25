<?php

use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;

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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('scrumboard')->name('scrumboard.')->group(function () {
    Route::get('/', function () { return Inertia::render('Scrumboard'); })->name('index');
    Route::get('/create/{id}', function (Request $request) { 
        return Inertia::render('Create', [
            'board_id' => $request->route('id')
        ]); 
    })->name('create');
});