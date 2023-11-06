<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Builder;

trait Filterable
{
    public function scopeFilter(Builder $query, array $filters)
    {
        foreach ($filters as $filter => $value) {
            if (method_exists($this, $filter)) {
                $this->$filter($query, $value);
            }
        }
    }

}
