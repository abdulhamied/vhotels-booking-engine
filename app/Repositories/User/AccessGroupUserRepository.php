<?php
namespace vengine\Repositories\User;

class AccessGroupUserRepository extends \vengine\Repositories\BaseRepository {

    public function __construct(
    \vengine\Models\AccessGroupUser $model
            ) {
        $this->model = $model;
        $this->rules = \vengine\Models\AccessGroupUser::$rules;
    }



}
