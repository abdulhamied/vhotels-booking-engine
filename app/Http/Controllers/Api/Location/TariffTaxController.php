<?php
namespace vengine\Http\Controllers\Api\Location;

class TariffTaxController extends \vengine\Http\Controllers\Api\BaseController{
    public function __construct(
    \vengine\Repositories\Location\TariffTaxRepository $repository
            ) {
        $this->repository = $repository;
    }
  
    
}
