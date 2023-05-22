<?php

use Illuminate\Http\Request;
use Modules\Scrumboard\Http\Middleware\CardIdVerification;
use Modules\Scrumboard\Http\Controllers\Api\CardController;
use Modules\Scrumboard\Http\Middleware\BoardIdVerification;
use Modules\Scrumboard\Http\Controllers\Api\BoardController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::name('board.')->prefix('boards')->group(function () {
    Route::get('/', [BoardController::class, 'index'])->name('index');
    Route::get('/{id}', [BoardController::class, 'show'])->middleware(BoardIdVerification::class)->name('show');
});

Route::name('card.')->prefix('cards')->group(function () {
    Route::get('/', [CardController::class, 'index'])->name('index');
    Route::post('/', [CardController::class, 'store'])->name('store');
    Route::put('/{id}', [CardController::class, 'edit'])->middleware(CardIdVerification::class)->name('edit');
    Route::delete('/{id}', [CardController::class, 'delete'])->middleware(CardIdVerification::class)->name('delete');
    Route::get('/{id}', [CardController::class, 'show'])->middleware(CardIdVerification::class)->name('show');
});