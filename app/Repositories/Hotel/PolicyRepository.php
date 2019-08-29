<?php
namespace vengine\Repositories\Hotel;

class PolicyRepository extends \vengine\Repositories\BaseRepository
{
    public function __construct(
    \vengine\Models\Policy $model
            ) {
                $this->model = $model;
                $this->rules = \vengine\Models\Policy::$rules;
                $this->with([]);
    }
}