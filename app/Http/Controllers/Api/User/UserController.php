<?php
namespace vengine\Http\Controllers\Api\User;

class UserController extends \vengine\Http\Controllers\Api\BaseController{
    public function __construct(
    \vengine\Repositories\User\UserRepository $repository
            ) {
        $this->repository = $repository;
    }
}
