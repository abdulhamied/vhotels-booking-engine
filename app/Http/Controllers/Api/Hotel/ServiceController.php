<?php
namespace vengine\Http\Controllers\Api\Hotel;

class ServiceController extends \vengine\Http\Controllers\Api\BaseController{
    public function __construct(
    \vengine\Repositories\Hotel\ServiceRepository $repository
            ) {
        $this->repository = $repository;
    }
}
