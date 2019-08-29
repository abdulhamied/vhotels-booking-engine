<?php
namespace vengine\Http\Controllers\Api\Hotel;

class HotelServiceController extends \vengine\Http\Controllers\Api\BaseController{
    public function __construct(
    \vengine\Repositories\Hotel\HotelServiceRepository $repository
            ) {
        $this->repository = $repository;
    }
}
