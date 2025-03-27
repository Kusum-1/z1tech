<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PokemonController extends Controller
{
    public function fetchPokemon($nameOrId)
    {
        $nameOrId = strtolower($nameOrId);
        $response = Http::withHeaders([
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
            'User-Agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/119.0.0.0 Safari/537.36'
        ])->withoutVerifying() // Only use this temporarily if SSL is an issue
        ->timeout(30)
        ->get("https://pokeapi.co/api/v2/pokemon/{$nameOrId}");
        
        if ($response->failed()) {
            return response()->json(['error' => 'Pokémon not found'], 404);
        }

        $pokemon = $response->json();

        return view('pokemon-detail', [
            'name' => ucfirst($pokemon['name']),
            'image' => $pokemon['sprites']['front_default'] ?? '',
            'types' => array_map(fn($type) => $type['type']['name'], $pokemon['types']),
            'stats' => $pokemon['stats']
        ]);
    }
}
