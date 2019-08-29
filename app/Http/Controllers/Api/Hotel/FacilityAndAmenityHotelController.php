<?php
namespace vengine\Http\Controllers\Api\Hotel;

class FacilityAndAmenityHotelController extends \vengine\Http\Controllers\Api\BaseController{
    public function __construct(
    \vengine\Repositories\Hotel\FacilityAndAmenityHotelRepository $repository
            ) {
        $this->repository = $repository;
    }
}
