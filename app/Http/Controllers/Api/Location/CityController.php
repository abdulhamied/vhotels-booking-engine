<?php
namespace vengine\Http\Controllers\Api\Location;

class CityController extends \vengine\Http\Controllers\Api\BaseController{
    public function __construct(
    \vengine\Repositories\Location\CityRepository $repository
            ) {
        $this->repository = $repository;
    }
}
