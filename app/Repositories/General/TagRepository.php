<?php
namespace vengine\Repositories\General;

class TagRepository extends \vengine\Repositories\BaseRepository
{
    public function __construct(
    \vengine\Models\Tag $model
            ) {
        $this->model = $model;
        $this->rules = \vengine\Models\Tag::$rules;
        $this->with([]);
    }
}
