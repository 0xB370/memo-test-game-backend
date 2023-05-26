<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = ['memo_test_id', 'url'];

    public function memoTest()
    {
        return $this->belongsTo(MemoTest::class);
    }
}
