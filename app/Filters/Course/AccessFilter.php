<?php

namespace App\Filters\Course;

use Illuminate\Database\Eloquent\Builder;

class AccessFilter
{
    public function filter(Builder $builder, string $value)
    {
        dd($value);
    }
}
