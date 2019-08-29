<?php
namespace vengine\Http\Controllers\Api\Hotel;

class FacilityAndAmenityController extends \vengine\Http\Controllers\Api\BaseController{
    public function __construct(
    \vengine\Repositories\Hotel\FacilityAndAmenityRepository $repository
            ) {
        $this->repository = $repository;
    }
}
