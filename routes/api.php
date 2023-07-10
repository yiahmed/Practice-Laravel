<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
 */

Route::get('/teams', function (Request $request) {
    return response()->json(
        ['data' => [
        ['name' => 'Atlanta Hawks', 'logo' => 'https://upload.wikimedia.org/wikipedia/en/2/24/Atlanta_Hawks_logo.svg', 'color' => '#E03A3E', 'id' => 1],
        ['logo' => 'https://patch.com/img/cdn/users/68453/2012/05/raw/842b4607fd503508899d7e15b062a4d5.jpg', 'color' => '#000000', 'name' => 'Brooklyn Nets', 'id' => 3],
        ['logo' => 'https://upload.wikimedia.org/wikipedia/en/8/8f/Boston_Celtics.svg', 'color' => '#007A33', 'name' => 'Boston Celtics', 'id' => 2],
        ['logo' => 'https://upload.wikimedia.org/wikipedia/en/c/c4/Charlotte_Hornets_%282014%29.svg', 'color' => '#1D1160', 'name' => 'Charlotte Hornets', 'id' => 4],
        ['logo' => 'https://upload.wikimedia.org/wikipedia/en/6/67/Chicago_Bulls_logo.svg', 'color' => '#CE1141', 'name' => 'Chicago Bulls', 'id' => 5],
        ['logo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/0/03/Cleveland_Cavaliers_secondary_logo.svg/2373px-Cleveland_Cavaliers_secondary_logo.svg.png', 'color' => '#860038', 'name' => 'Cleveland Cavaliers', 'id' => 6],
        ['logo' => 'https://upload.wikimedia.org/wikipedia/en/9/97/Dallas_Mavericks_logo.svg', 'color' => '#00538C', 'name' => 'Dallas Mavericks', 'id' => 7],
        ['logo' => 'https://upload.wikimedia.org/wikipedia/en/7/76/Denver_Nuggets.svg', 'color' => '#0E2240', 'name' => 'Denver Nuggets', 'id' => 8],
        ['logo' => 'https://upload.wikimedia.org/wikipedia/commons/7/7c/Pistons_logo17.svg', 'color' => '#C8102E', 'name' => 'Detroit Pistons', 'id' => 9],
        ['name' => 'Golden State Warriors', 'logo' => 'https://upload.wikimedia.org/wikipedia/en/0/01/Golden_State_Warriors_logo.svg', 'color' => '#1D428A', 'id' => 10],
        ['logo' => 'https://upload.wikimedia.org/wikipedia/en/2/28/Houston_Rockets.svg', 'color' => '#CE1141', 'name' => 'Houston Rockets', 'id' => 11],
        ['logo' => 'https://upload.wikimedia.org/wikipedia/en/1/1b/Indiana_Pacers.svg', 'color' => '#002D62', 'name' => 'Indiana Pacers', 'id' => 12],
        ['logo' => 'https://upload.wikimedia.org/wikipedia/en/b/bb/Los_Angeles_Clippers_%282015%29.svg', 'color' => '#C8102E', 'name' => 'LA Clippers', 'id' => 13],
        ['name' => 'Los Angeles Lakers', 'logo' => 'https://upload.wikimedia.org/wikipedia/commons/3/3c/Los_Angeles_Lakers_logo.svg', 'color' => '#552583', 'id' => 14],
        ['name' => 'Memphis Grizzlies', 'logo' => 'https://upload.wikimedia.org/wikipedia/en/f/f1/Memphis_Grizzlies.svg', 'color' => '#5D76A9', 'id' => 15],
        ['color' => '#98002E', 'name' => 'Miami Heat', 'logo' => 'https://upload.wikimedia.org/wikipedia/en/f/fb/Miami_Heat_logo.svg', 'id' => 16],
        ['name' => 'Milwaukee Bucks', 'logo' => 'https://upload.wikimedia.org/wikipedia/en/4/4a/Milwaukee_Bucks_logo.svg', 'color' => '#00471B', 'id' => 17],
        ['name' => 'Minnesota Timberwolves', 'logo' => 'https://upload.wikimedia.org/wikipedia/en/c/c2/Minnesota_Timberwolves_logo.svg', 'color' => '#0C2340', 'id' => 18],
        ['name' => 'New Orleans Pelicans', 'logo' => 'https://upload.wikimedia.org/wikipedia/en/0/0d/New_Orleans_Pelicans_logo.svg', 'color' => '#85714D', 'id' => 19],
        ['name' => 'New York Knicks', 'logo' => 'https://upload.wikimedia.org/wikipedia/en/2/25/New_York_Knicks_logo.svg', 'color' => '#F58426', 'id' => 20],
        ['name' => 'Oklahoma City Thunder', 'logo' => 'https://upload.wikimedia.org/wikipedia/en/5/5d/Oklahoma_City_Thunder.svg', 'color' => '#007AC1', 'id' => 21],
        ['name' => 'Orlando Magic', 'logo' => 'https://upload.wikimedia.org/wikipedia/en/1/10/Orlando_Magic_logo.svg', 'color' => '#0077C0', 'id' => 22],
        ['name' => 'Philadelphia 76ers', 'logo' => 'https://upload.wikimedia.org/wikipedia/en/0/0e/Philadelphia_76ers_logo.svg', 'color' => '#006BB6', 'id' => 23],
        ['name' => 'Phoenix Suns', 'logo' => 'https://upload.wikimedia.org/wikipedia/en/d/dc/Phoenix_Suns_logo.svg', 'color' => '#1D1160', 'id' => 24],
        ['name' => 'Portland Trail Blazers', 'logo' => 'https://upload.wikimedia.org/wikipedia/en/2/21/Portland_Trail_Blazers_logo.svg', 'color' => '#E03A3E', 'id' => 25],
        ['name' => 'Sacramento Kings', 'logo' => 'https://upload.wikimedia.org/wikipedia/en/c/c7/SacramentoKings.svg', 'color' => '#5A2D81', 'id' => 26],
        ['name' => 'San Antonio Spurs', 'logo' => 'https=>//upload.wikimedia.org/wikipedia/en/a/a2/San_Antonio_Spurs.svg', 'color' => '#C4CED4', 'id' => 27],
        ['name' => 'Toronto Raptors', 'logo' => 'https=>//upload.wikimedia.org/wikipedia/en/3/36/Toronto_Raptors_logo.svg', 'color' => '#CE1141', 'id' => 28],
        ['name' => 'Utah Jazz', 'logo' => 'https=>//upload.wikimedia.org/wikipedia/en/0/04/Utah_Jazz_logo_%282016%29.svg', 'color' => '#002B5C', 'id' => 29],
        ['name' => 'Washington Wizards', 'logo' => 'https=>//upload.wikimedia.org/wiki', 'color' =>
            "#002B5C", 'id' => 30],
    ]]
);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
