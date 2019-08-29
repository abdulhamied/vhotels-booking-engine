<?php
namespace vengine\Http\Controllers\Api\PublicApi;
use Illuminate\Http\Request;

class HotelCacheTariffController extends \vengine\Http\Controllers\Api\ResponseController{
    protected $repository;
    
    public function __construct(\vengine\Repositories\CacheTariff\PublicApi\HotelCacheTariffRepository $repo) {
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
