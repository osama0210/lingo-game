<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Guess extends Model
{
    public function game()
    {
        return $this->belongsTo(Game::class);
    }
}
