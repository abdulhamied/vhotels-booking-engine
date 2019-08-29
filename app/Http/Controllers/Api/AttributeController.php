<?php
namespace vengine\Http\Controllers\Api;

class AttributeController extends \vengine\Http\Controllers\Api\BaseController{
    public function __construct(
    \vengine\Repositories\General\AttributeRepository $repository
            ) {
        $this->repository = $repository;
    }
}
