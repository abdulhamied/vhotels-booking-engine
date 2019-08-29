<?php
namespace vengine\Repositories\General;

class AttributeRepository extends \vengine\Repositories\BaseRepository
{
    public function __construct(
    \vengine\Models\Attribute $model
            ) {
        $this->model = $model;
        $this->rules = \vengine\Models\Attribute::$rules;
    }
}
