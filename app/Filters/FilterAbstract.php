<?php

namespace App\Filters;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;

abstract class FilterAbstract
{
    protected array $filters = [];

    public function __construct(protected Request $request)
    {
    }

    public function filter(Builder $builder): Builder
    {
        foreach ($this->getFilters() as $filter => $class) {
            $this->resolveFilter($filter);
        }
        return $builder;
    }

    public function add(array $filters)
    {
        $this->filters = array_merge($this->filters, $filters);
        return $this;
    }

    protected function getFilters(): array
    {
        return $this->filterFilters($this->filters);
    }

    protected function resolveFilter($filter)
    {
        return new $this->filters[$filter];
    }

    protected function filterFilters(array $filters): array
    {
        return array_filter($this->request->only(array_keys($this->filters)));
    }
}
