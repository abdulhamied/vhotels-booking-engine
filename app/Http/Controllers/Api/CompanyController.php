<?php
namespace vengine\Http\Controllers\Api;

class CompanyController extends \vengine\Http\Controllers\Api\BaseController{
    public function __construct(
    \vengine\Repositories\General\CompanyRepository $repository
            ) {
        $this->repository = $repository;
    }
}
