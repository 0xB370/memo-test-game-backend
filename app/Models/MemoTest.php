<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class MemoTest extends Model
{
    public function images(): HasMany
    {
        return $this->hasMany(Image::class);
    }
}

