<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PlayerApiController extends Controller
{
    private $players = [
        ["first_name" => "Trae", "height_feet" => 6, "height_inches" => 2, "last_name" => "Young", "position" => "G", "team_id" => 1, "weight_pounds" => 164,
        ],
        ["first_name" => "Jayson", "height_feet" => 6, "height_inches" => 8, "last_name" => "Tatum", "position" => "F", "team_id" => 2, "weight_pounds" => 208,
        ],
        ["first_name" => "Mikal", "height_feet" => 6, "height_inches" => 7, "last_name" => "Bridges", "position" => "F", "team_id" => 3, "weight_pounds" => 210,
        ],
        ["first_name" => "LaMelo", "height_feet" => 6, "height_inches" => 7, "last_name" => "Ball", "position" => "G", "team_id" => 4, "weight_pounds" => 180,
        ],
        ["first_name" => "DeMar", "height_feet" => 6, "height_inches" => 6, "last_name" => "DeRozan", "position" => "G-F", "team_id" => 5, "weight_pounds" => 220,
        ],
        ["first_name" => "Donovan", "height_feet" => 6, "height_inches" => 3, "last_name" => "Mitchell", "position" => "G", "team_id" => 6, "weight_pounds" => 215,
        ],
        ["first_name" => "Luka", "height_feet" => 6, "height_inches" => 7, "last_name" => "Doncic", "position" => "F-G", "team_id" => 7, "weight_pounds" => 230,
        ],
        ["first_name" => "Nikola", "height_feet" => 7, "height_inches" => 0, "last_name" => "Jokic", "position" => "C", "team_id" => 8, "weight_pounds" => 284,
        ],
        ["first_name" => "Cade", "height_feet" => 6, "height_inches" => 7, "last_name" => "Cunningham", "position" => "G", "team_id" => 9, "weight_pounds" => 220,
        ],
        ["first_name" => "Stephen", "height_feet" => 6, "height_inches" => 2, "last_name" => "Curry", "position" => "G", "team_id" => 10, "weight_pounds" => 185,
        ],
        ["first_name" => "Jalen", "height_feet" => 6, "height_inches" => 4, "last_name" => "Green", "position" => "G", "team_id" => 11, "weight_pounds" => 186,
        ],
        ["first_name" => "Tyrese", "height_feet" => 6, "height_inches" => 5, "last_name" => "Haliburton", "position" => "G", "team_id" => 12, "weight_pounds" => 185,
        ],
        ["first_name" => "Paul", "height_feet" => 6, "height_inches" => 8, "last_name" => "George", "position" => "F", "team_id" => 13, "weight_pounds" => 220,
        ],
        ["first_name" => "Lebron", "height_feet" => 6, "height_inches" => 9, "last_name" => "James", "position" => "F", "team_id" => 14, "weight_pounds" => 250,
        ],
        ["first_name" => "Ja", "height_feet" => 6, "height_inches" => 2, "last_name" => "Morant", "position" => "G", "team_id" => 15, "weight_pounds" => 174,
        ],
        ["first_name" => "Jimmy", "height_feet" => 6, "height_inches" => 7, "last_name" => "Butler", "position" => "F", "team_id" => 16, "weight_pounds" => 230,
        ],
        ["first_name" => "Giannis", "height_feet" => 7, "height_inches" => 0, "last_name" => "Antetokounmpo", "position" => "F", "team_id" => 17, "weight_pounds" => 243,
        ],
        ["first_name" => "Anthony", "height_feet" => 6, "height_inches" => 4, "last_name" => "Edwards", "position" => "G", "team_id" => 18, "weight_pounds" => 225,
        ],
        ["first_name" => "Zion", "height_feet" => 6, "height_inches" => 6, "last_name" => "Willamson", "position" => "F", "team_id" => 19, "weight_pounds" => 284,
        ],
        ["first_name" => "RJ", "height_feet" => 6, "height_inches" => 6, "last_name" => "Barret", "position" => "F-G", "team_id" => 20, "weight_pounds" => 214,
        ],
        ["first_name" => "Shai", "height_feet" => 6, "height_inches" => 6, "last_name" => "Gilgeous-Alexander", "position" => "G", "team_id" => 21, "weight_pounds" => 195,
        ],
        ["first_name" => "Jalen", "height_feet" => 6, "height_inches" => 5, "last_name" => "Suggs", "position" => "G", "team_id" => 22, "weight_pounds" => 205,
        ],
        ["first_name" => "Joel", "height_feet" => 7, "height_inches" => 0, "last_name" => "Embiid", "position" => "F-C", "team_id" => 23, "weight_pounds" => 250,
        ],
        ["first_name" => "Devin", "height_feet" => 6, "height_inches" => 5, "last_name" => "Booker", "position" => "G", "team_id" => 24, "weight_pounds" => 206,
        ],
        ["first_name" => "Damian", "height_feet" => 6, "height_inches" => 2, "last_name" => "Lillard", "position" => "G", "team_id" => 25, "weight_pounds" => 195,
        ],
        ["first_name" => "De'Aaron", "height_feet" => 6, "height_inches" => 3, "last_name" => "Fox", "position" => "G", "team_id" => 26, "weight_pounds" => 185,
        ],
        ["first_name" => "Victor", "height_feet" => 7, "height_inches" => 5, "last_name" => "Wembanyama", "position" => "C", "team_id" => 27, "weight_pounds" => 210,
        ],
        ["first_name" => "Pascal", "height_feet" => 6, "height_inches" => 8, "last_name" => "Siakam", "position" => "F", "team_id" => 28, "weight_pounds" => 230,
        ],
        ["first_name" => "Collin", "height_feet" => 6, "height_inches" => 2, "last_name" => "Sexton", "position" => "G", "team_id" => 29, "weight_pounds" => 190,
        ],
        ["first_name" => "Jordan", "height_feet" => 6, "height_inches" => 4, "last_name" => "Poole", "position" => "G", "team_id" => 30, "weight_pounds" => 194,
        ],
    ];
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $players = Player::all();
        return response()->json(['data' => $players]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $createdPlayers = [];

        foreach ($this->players as $playersData) {
            $data = $this->validatePlayerData($playersData);

            $player = Player::create($data);
            $createdPlayers[] = $player;
        }

        return response()->json(['message' => 'Players created successfully', 'data' => $createdPlayers]);
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

    private function validatePlayerData(array $playerData)
    {
        $validator = Validator::make($playerData, [
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'position' => 'required|string',
            'height_feet' => 'required|integer',
            'height_inches' => 'required|integer',
            'weight_pounds' => 'required|integer',
            'team_id' => 'required|integer',
        ]);

        if ($validator->fails()) {
            // Handle validation errors if needed
            // For simplicity, I'll just throw an exception for now
            throw new \InvalidArgumentException('Invalid player data');
        }

        return $validator->validated();
    }
}
