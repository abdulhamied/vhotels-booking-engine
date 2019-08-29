<?php
namespace vengine\Http\Controllers\Api\Hotel;

class PolicyController extends \vengine\Http\Controllers\Api\BaseController{
    public function __construct(
    \vengine\Repositories\Hotel\PolicyRepository $repository
            ) {
        $this->repository = $repository;
    }
}
