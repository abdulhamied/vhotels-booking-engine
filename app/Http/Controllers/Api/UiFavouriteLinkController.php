<?php
namespace vengine\Http\Controllers\Api;
use Illuminate\Http\Request;

class UiFavouriteLinkController extends \vengine\Http\Controllers\Api\BaseController{
    public function __construct(
    \vengine\Repositories\General\UiFavouriteLinkRepository $repository
            ) {
        $this->repository = $repository;
    }

   
}
