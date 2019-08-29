<?php
namespace vengine\Repositories\User;

class UserRepository extends \vengine\Repositories\BaseRepository {

    public function __construct(
    \vengine\User $model
            ) {
        $this->model = $model;
        $this->rules = \vengine\User::$rules;
        $this->with([
            'accessGroups',
            'accessGroups.permissions',
            'accessGroups.resourceAccess',
            ]);
    }

}
