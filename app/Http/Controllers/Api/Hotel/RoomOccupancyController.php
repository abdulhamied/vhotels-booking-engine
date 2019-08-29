<?php
namespace vengine\Http\Controllers\Api\Hotel;

class RoomOccupancyController extends \vengine\Http\Controllers\Api\BaseController{
    public function __construct(
    \vengine\Repositories\Hotel\RoomOccupancyRepository $repository
            ) {
        $this->repository = $repository;
    }
}
