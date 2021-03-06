<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $fillable = [
        'home_team_id',
        'away_team_id',
        'championship_id',
        'winner_id',
        'loser_id',
        'winner_score',
        'loser_score',
        'round',
    ];

    public function championship()
    {
        return $this->belongsTo(Championship::class);
    }

    public function homeTeam()
    {
        return $this->belongsTo(Team::class, 'home_team_id');
    }

    public function awayTeam()
    {
        return $this->belongsTo(Team::class, 'away_team_id');
    }

    // public function winner()
    // {
    //     return $this->belongsTo(Team::class, 'winner_id');
    // }

    // public function loser()
    // {
    //     return $this->belongsTo(Team::class, 'loser_id');
    // }

    // public function getWinnerScoreAttribute($value)
    // {
    //     return $value ?: 0;
    // }

    // public function getLoserScoreAttribute($value)
    // {
    //     return $value ?: 0;
    // }
}
