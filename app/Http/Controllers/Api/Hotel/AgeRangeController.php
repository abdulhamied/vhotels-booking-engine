<?php
namespace vengine\Http\Controllers\Api\Hotel;

class AgeRangeController extends \vengine\Http\Controllers\Api\BaseController{
    public function __construct(
    \vengine\Repositories\Hotel\AgeRangeRepository $repository
            ) {
        $this->repository = $repository;
    }
}
