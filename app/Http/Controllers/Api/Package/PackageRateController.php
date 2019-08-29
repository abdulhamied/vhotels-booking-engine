<?php
namespace vengine\Http\Controllers\Api\Package;

class PackageRateController extends \vengine\Http\Controllers\Api\BaseController{
    public function __construct(
    \vengine\Repositories\Package\PackageRateRepository $repository
            ) {
        $this->repository = $repository;
    }

}
