<?php

namespace BrianFaust\Database\Contracts\Models\Traits;

use Illuminate\Database\Eloquent\Builder;

interface ScopesTrait
{
    public function scopeWhereLike(Builder $builder, $field, $value);

    public function scopeOrWhereLike(Builder $builder, $field, $value);

    public function scopeWhereIlike(Builder $builder, $field, $value);

    public function scopeOrWhereIlike(Builder $builder, $field, $value);
}
