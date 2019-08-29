<?php
namespace vengine\Repositories\User;

class ResourceAccessRepository extends \vengine\Repositories\BaseRepository {

    public function __construct(
    \vengine\Models\ResourceAccess $model
            ) {
        $this->model = $model;
        $this->rules = \vengine\Models\ResourceAccess::$rules;
    }

}
