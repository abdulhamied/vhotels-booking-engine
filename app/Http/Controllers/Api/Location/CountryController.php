<?php
namespace vengine\Http\Controllers\Api\Location;

class CountryController extends \vengine\Http\Controllers\Api\BaseController{
    public function __construct(
    \vengine\Repositories\Location\CountryRepository $repository
            ) {
        $this->repository = $repository;
    }
}
