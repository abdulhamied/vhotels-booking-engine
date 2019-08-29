<?php
namespace vengine\Http\Controllers\Api\Package;

class PackageServiceController extends \vengine\Http\Controllers\Api\BaseController{
    public function __construct(
    \vengine\Repositories\Package\PackageServiceRepository $repository
            ) {
        $this->repository = $repository;
    }
}
