<?php
namespace vengine\Http\Controllers\Api\Hotel;

class MealTypeController extends \vengine\Http\Controllers\Api\BaseController{
    public function __construct(
    \vengine\Repositories\Hotel\MealTypeRepository $repository
            ) {
        $this->repository = $repository;
    }
}
