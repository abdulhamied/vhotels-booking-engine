<?php
namespace vengine\Http\Controllers\Api\Hotel;

class HotelTransferController extends \vengine\Http\Controllers\Api\BaseController{
    public function __construct(
    \vengine\Repositories\Hotel\HotelTransferRepository $repository
            ) {
        $this->repository = $repository;
    }
}
