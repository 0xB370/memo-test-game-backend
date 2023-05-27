<?php

namespace App\GraphQL\Queries;

use App\Models\Image;
use Illuminate\Database\Eloquent\Model;

final class Images extends Model
{
    /**
     * @param  null  $_
     * @param  array{}  $args
     */
    public function __invoke($rootValue, array $args)
    {
        $images = Image::all();

        return $images;
    }
}
