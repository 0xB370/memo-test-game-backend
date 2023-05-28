<?php

namespace App\GraphQL\Queries;

use App\Models\Image;
use Illuminate\Database\Eloquent\Model;

final class Images extends Model
{
    /**
     * Retrieve all images.
     *
     * @param  null  $rootValue
     * @param  array  $args
     * @return \Illuminate\Database\Eloquent\Collection
     */

    public function __invoke($rootValue, array $args)
    {
        return Image::all();
    }
}
