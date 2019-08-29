<?php
namespace vengine\Http\Controllers\Api\Package;

class OfferController extends \vengine\Http\Controllers\Api\BaseController{
    public function __construct(
    \vengine\Repositories\Package\OfferRepository $repository
            ) {
        $this->repository = $repository;
    }
}
