<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GameStats extends Model
{
    use HasFactory;

    protected $table = 'game_stats';
    protected $fillable = [
        "bdl_id",
        "ast",
        "blk",
        "dreb",
        "fg3_pct",
        "fg3a",
        "fg3m",
        "fg_pct",
        "fga",
        "fgm",
        "ft_pct",
        "fta",
        "ftm",
        "min",
        "oreb",
        "pf",
        "pts",
        "reb",
        "stl",
        "turnover",
        "player_id",
        "team_id",
    ];
    public $timestamps = false;

}
