<?php

namespace BrianFaust\Database\Repositories\Criteria;

use BrianFaust\Database\Contracts\Repositories\Repository;
use Illuminate\Database\Eloquent\Model;

class Limit extends Criterion
{
    private $value;

    public function __construct($value)
    {
        $this->value = $value;
    }

    public function apply(Model $model, Repository $repository)
    {
        return $model->limit($this->value);
    }
}
