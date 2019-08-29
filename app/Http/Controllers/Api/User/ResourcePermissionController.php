<?php
namespace vengine\Http\Controllers\Api\User;

class ResourcePermissionController extends \vengine\Http\Controllers\Api\BaseController{
    public function __construct(
    \vengine\Repositories\User\ResourcePermissionRepository $repository
            ) {
        $this->repository = $repository;
    }
}
