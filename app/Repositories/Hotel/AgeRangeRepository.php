<?php
namespace vengine\Repositories\Hotel;

class AgeRangeRepository extends \vengine\Repositories\BaseRepository
{
    public function __construct(
    \vengine\Models\AgeRange $model
            ) {
        $this->model = $model;
        $this->rules = \vengine\Models\AgeRange::$rules;
        $this->with(['company']);
    }
}