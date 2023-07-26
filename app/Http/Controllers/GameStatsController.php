<?php

namespace App\Http\Controllers;

use App\Models\GameStats;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class GameStatsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // URL to call the external API with parameters
        $url = 'https://www.balldontlie.io/api/v1/stats?per_page=100&seasons%5B%5D=2022&postseason=true&player_ids%5B%5D=490';

        // Call the external API using the HTTP client
        $response = Http::get($url);

        // Log the API response
        Log::info(print_r($response->json(), true));

        // Fetch data from the GameStats model (assuming you have defined the GameStats model)
        $game_stats = GameStats::all();

        // Combine the API response and GameStats model data in a single array
        $combined_data = [
            'api_data' => $response->json(),
            'game_stats' => $game_stats,
        ];

        // Return the combined data as a JSON response to Insomnia
        return response()->json(['data' => $combined_data]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $requestData = $request->all();
        $createdGameStats = [];

        // Validate the request data and create GameStats entries
        foreach ($requestData as $gameStatsData) {
            $data = $this->validateGameStatsData($gameStatsData);
            $game_stats = GameStats::create($data);
            $createdGameStats[] = $game_stats;
        }

        return response()->json(['message' => 'Game Stats created successfully', 'data' => $createdGameStats]);
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

    private function validateGameStatsData(array $gameStatsData)
    {
        $validator = Validator::make($gameStatsData, [
            'bdl_id' => 'required|integer',
            'ast' => 'required|integer',
            'blk' => 'required|integer',
            'dreb' => 'required|integer',
            'fg3_pct' => 'required|numeric',
            'fg3a' => 'required|integer',
            'fg3m' => 'required|integer',
            'fg_pct' => 'required|numeric',
            'fga' => 'required|integer',
            'fgm' => 'required|integer',
            'ft_pct' => 'required|numeric',
            'fta' => 'required|integer',
            'ftm' => 'required|integer',
            'min' => 'required|string',
            'oreb' => 'required|integer',
            'pf' => 'required|integer',
            'pts' => 'required|integer',
            'reb' => 'required|integer',
            'stl' => 'required|integer',
            'turnover' => 'required|integer',
            'player_id' => 'required|integer',
            'team_id' => 'required|integer',
        ]);

        if ($validator->fails()) {
            // Handle validation errors if needed
            // For simplicity, I'll just throw an exception for now
            throw new \InvalidArgumentException('Invalid game stats data');
        }

        return $validator->validated();
    }
}
