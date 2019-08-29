<?php
namespace vengine\Http\Controllers\Api\Hotel;

class RoomController extends \vengine\Http\Controllers\Api\BaseController{
    public function __construct(
    \vengine\Repositories\Hotel\RoomRepository $repository
            ) {
        $this->repository = $repository;
    }
}
