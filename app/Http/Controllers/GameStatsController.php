<?php

namespace App\Http\Controllers;

use App\Models\GameStats;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class GameStatsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Call the external API using the HTTP client
        $response = Http::get('url');

        // Log a debug message
        Log::debug('hello world');

        // Log the response data (commented out as it might be too large)
        // Log::debug($response);

        // Log the response data in a more readable format
        Log::info(print_r($response->json(), true));

        // Fetch data from the GameStats model (assuming you have defined the GameStats model)
        $game_stats = GameStats::all();

        // Return a JSON response with the data from the GameStats model
        return response()->json(['data' => $game_stats]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
