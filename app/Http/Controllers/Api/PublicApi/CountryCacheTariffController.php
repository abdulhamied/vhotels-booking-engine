<?php
namespace vengine\Http\Controllers\Api\PublicApi;
use Illuminate\Http\Request;

class CountryCacheTariffController extends \vengine\Http\Controllers\Api\ResponseController{
    protected $repository;
    
    public function __construct(\vengine\Repositories\CacheTariff\PublicApi\CountryCacheTariffRepository $repo) {
        $this->repository = $repo;
    }
    
    public function getRates(Request $request)
    {
        $check =  $this->repository->getLowestRates($request);
        if($check)
            return $check;
        
        
        return $this->repository->validator->messages();
    }
}
