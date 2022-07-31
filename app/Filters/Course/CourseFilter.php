<?php

namespace App\Filters\Course;

use App\Filters\FilterAbstract;

class CourseFilter extends FilterAbstract
{
    protected array $filters = [
        'access' => AccessFilter::class,
        'difficulty' => DifficultyFilter::class
    ];
}
