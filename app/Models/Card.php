<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    protected $fillable = ['game_session_id', 'flipped_cards', 'matched_cards'];

    public function gameSession()
    {
        return $this->belongsTo(GameSession::class);
    }
}
