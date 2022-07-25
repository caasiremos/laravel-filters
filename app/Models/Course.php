<?php

namespace App\Models;

use App\Filters\Course\CourseFilter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    public function scopeFilter(Builder $builder, $request, array $filters = [])
    {
        return (new CourseFilter($request))->add($filters)->filter($builder);
    }
}
