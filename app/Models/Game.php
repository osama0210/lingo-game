<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    public function guesses()
    {
        return $this->hasMany(Guess::class);
    }
    public function word()
    {
        return $this->belongsTo(Word::class);
    }
}
