<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GameSession extends Model
{
    use HasFactory;

    protected $fillable = ['retries', 'numberOfPairs', 'state'];

    public function getNumberOfPairsAttribute($value)
    {
        return $this->attributes['number_of_pairs'];
    }

    public function setNumberOfPairsAttribute($value)
    {
        $this->attributes['number_of_pairs'] = $value;
    }


    public function memoTestId()
    {
        return $this->belongsTo(MemoTest::class, 'memo_test_id');
    }
}
