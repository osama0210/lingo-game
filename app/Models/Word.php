<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Word extends Model
{
    protected $fillable = ['word'];

    public function games()
    {
        return $this->hasMany(Game::class);
    }

}
