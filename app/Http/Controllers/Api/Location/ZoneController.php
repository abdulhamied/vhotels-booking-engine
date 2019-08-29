<?php
namespace vengine\Http\Controllers\Api\Location;

class ZoneController extends \vengine\Http\Controllers\Api\BaseController{
    public function __construct(
    \vengine\Repositories\Location\ZoneRepository $repository
            ) {
        $this->repository = $repository;
    }
}
