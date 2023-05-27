<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    public function memoTest(): BelongsTo
    {
        return $this->belongsTo(MemoTest::class);
    }
}
