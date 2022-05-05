<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Championship extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'first_winner_id',
        'second_winner_id',
        'third_winner_id',
    ];

    public function games()
    {
        return $this->hasMany(Game::class);
    }
}
