<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GameSession extends Model
{
    protected $fillable = ['memo_test_id', 'retry_count', 'score', 'is_session_ended'];

    public function memoTest()
    {
        return $this->belongsTo(MemoTest::class);
    }

    public function cards()
    {
        return $this->hasOne(Card::class);
    }
}
