<?php

namespace vengine\Http\Controllers\Api\Hotel;

class EnhancementRateController extends \vengine\Http\Controllers\Api\BaseController{
    public function __construct(\vengine\Repositories\Hotel\EnhancementRateRepository $repo) {
        $this->repository = $repo;
    }
}
