<?php
namespace vengine\Http\Controllers\Api\Location;

class CurrencyController extends \vengine\Http\Controllers\Api\BaseController{
    public function __construct(
    \vengine\Repositories\Location\CurrencyRepository $repository
            ) {
        $this->repository = $repository;
    }
}
