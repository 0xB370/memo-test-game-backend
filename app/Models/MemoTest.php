<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MemoTest extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function images()
    {
        return $this->hasMany(Image::class);
    }

    public function gameSessions()
    {
        return $this->hasMany(GameSession::class);
    }
}

