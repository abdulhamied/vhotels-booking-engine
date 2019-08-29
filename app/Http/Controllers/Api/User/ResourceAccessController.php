<?php
namespace vengine\Http\Controllers\Api\User;

class ResourceAccessController extends \vengine\Http\Controllers\Api\BaseController{
    public function __construct(
    \vengine\Repositories\User\ResourceAccessRepository $repository
            ) {
        $this->repository = $repository;
    }
}
