<?php
namespace vengine\Http\Controllers\Api\Package;

class OfferRuleController extends \vengine\Http\Controllers\Api\BaseController{
    public function __construct(
    \vengine\Repositories\Package\OfferRuleRepository $repository
            ) {
        $this->repository = $repository;
    }
}
