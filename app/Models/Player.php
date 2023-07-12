<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;

    protected $table = 'players';
    protected $fillable = ['first_name', 'last_name', 'position', 'height_feet', 'height_inches', 'weight_pounds', 'team_id'];
    public $timestamps = false;
}
