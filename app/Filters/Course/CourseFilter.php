<?php

namespace App\Filters\Course;

use Illuminate\Http\Request;
use App\Filters\FilterAbstract;
use Illuminate\Database\Eloquent\Builder;

class CourseFilter extends FilterAbstract
{
    protected array $filters = [
        'access' => AccessFilter::class
    ];
}
