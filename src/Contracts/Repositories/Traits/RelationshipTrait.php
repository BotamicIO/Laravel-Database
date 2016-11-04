<?php

namespace BrianFaust\Database\Contracts\Repositories\Traits;

use Illuminate\Database\Eloquent\Model;

interface RelationshipTrait
{
    public function saveRelation($modelOrId, $relation, Model $relationModel, array $joining = [], $touch = true);

    public function saveRelations($modelOrId, $relation, array $models, array $joinings = []);

    public function associateRelation($modelOrId, $relation, Model $relationModel);

    public function attachRelation($modelOrId, $relation, $relationId, array $attributes = [], $touch = true);

    public function detachRelation($modelOrId, $relation, $ids = [], $touch = true);

    public function syncRelation($modelOrId, $relation, $ids, $detaching = true);

    public function updateExistingPivot($modelOrId, $relation, $relationId, array $attributes, $touch = true);

    public function getRelation(Model $model, $relation);
}
