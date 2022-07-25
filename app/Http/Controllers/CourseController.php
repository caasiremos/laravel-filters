<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Filters\Course\DifficultyFilter;

class CourseController extends Controller
{
    public function index(Request $request)
    {
        $courses = Course::filter($request, $this->getFilters())->get();
        return $courses;
    }

    protected function getFilters()
    {
        return [
            'difficulty' => DifficultyFilter::class
        ];
    }
}
