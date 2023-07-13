<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    public function players()
    {
        return $this->hasMany(Player::class);
    }

    protected $table = 'teams';
    protected $fillable = ['name', 'logo', 'color'];

    public $timestamps = false;

    public function team_color() {
        return $this->color;
    }

    public function team_color_to_black(string $color = null , $name)
    {
        $this->update([
            'color' => $color
        ]);
        return $this;
    }
}
