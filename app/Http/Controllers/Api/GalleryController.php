<?php
namespace vengine\Http\Controllers\Api;

class GalleryController extends \vengine\Http\Controllers\Api\BaseController{
    public function __construct(
    \vengine\Repositories\General\GalleryRepository $repository
            ) {
        $this->repository = $repository;
    }
}
