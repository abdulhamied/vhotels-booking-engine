<?php
namespace vengine\Http\Controllers\Api\Hotel;

class RoomAvailabilityController extends \vengine\Http\Controllers\Api\BaseController{
    public function __construct(
    \vengine\Repositories\Hotel\RoomAvailabilityRepository $repository
            ) {
        $this->repository = $repository;
    }
}
