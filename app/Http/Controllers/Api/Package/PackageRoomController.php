<?php
namespace vengine\Http\Controllers\Api\Package;

class PackageRoomController extends \vengine\Http\Controllers\Api\BaseController{
    public function __construct(
    \vengine\Repositories\Package\PackageRoomRepository $repository
            ) {
        $this->repository = $repository;
    }
}
