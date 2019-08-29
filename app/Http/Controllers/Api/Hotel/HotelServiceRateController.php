<?php
namespace vengine\Http\Controllers\Api\Hotel;

class HotelServiceRateController extends \vengine\Http\Controllers\Api\BaseController{
    public function __construct(
    \vengine\Repositories\Hotel\HotelServiceRateRepository $repository
            ) {
        $this->repository = $repository;
    }
}
