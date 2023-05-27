<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GameSession extends Model
{
    use HasFactory;

    protected $fillable = ['retries', 'number_of_pairs', 'state'];

    public function memoTest()
    {
        return $this->belongsTo(MemoTest::class);
    }
}
