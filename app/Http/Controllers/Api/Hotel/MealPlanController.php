<?php
namespace vengine\Http\Controllers\Api\Hotel;

class MealPlanController extends \vengine\Http\Controllers\Api\BaseController{
    public function __construct(
    \vengine\Repositories\Hotel\MealPlanRepository $repository
            ) {
        $this->repository = $repository;
    }
}
