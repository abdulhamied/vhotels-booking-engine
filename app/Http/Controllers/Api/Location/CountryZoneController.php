<?php
namespace vengine\Http\Controllers\Api\Location;

class CountryZoneController extends \vengine\Http\Controllers\Api\BaseController{
    public function __construct(
    \vengine\Repositories\Location\CountryZoneRepository $repository
            ) {
        $this->repository = $repository;
    }
}
