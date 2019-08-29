<?php
namespace vengine\Repositories\User;

class ResourcePermissionRepository extends \vengine\Repositories\BaseRepository {

    public function __construct(
    \vengine\Models\ResourcePermission $model
            ) {
        $this->model = $model;
        $this->rules = \vengine\Models\ResourcePermission::$rules;
    }

}
