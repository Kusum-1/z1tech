<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PokemonController;

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

// Route::get('/', [PokemonController::class, 'index']);
// Route::get('/pokemon/{id}', [PokemonController::class, 'getPokemon']);

Route::get('/', function () {
    return view('pokemon');
});

Route::get('/pokemon/{nameOrId}', [PokemonController::class, 'fetchPokemon']);
