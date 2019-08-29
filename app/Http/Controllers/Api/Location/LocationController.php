<?php
namespace vengine\Http\Controllers\Api\Location;

class LocationController extends \vengine\Http\Controllers\Api\BaseController{
    public function __construct(
    \vengine\Repositories\Location\LocationRepository $repository
            ) {
        $this->repository = $repository;
    }
}
