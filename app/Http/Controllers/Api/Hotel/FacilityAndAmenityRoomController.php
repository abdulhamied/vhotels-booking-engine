<?php
namespace vengine\Http\Controllers\Api\Hotel;

class FacilityAndAmenityRoomController extends \vengine\Http\Controllers\Api\BaseController{
    public function __construct(
    \vengine\Repositories\Hotel\FacilityAndAmenityRoomRepository $repository
            ) {
        $this->repository = $repository;
    }
}
