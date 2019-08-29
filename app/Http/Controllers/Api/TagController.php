<?php
namespace vengine\Http\Controllers\Api;

class TagController extends \vengine\Http\Controllers\Api\BaseController{
    public function __construct(
    \vengine\Repositories\General\TagRepository $repository
            ) {
        $this->repository = $repository;
    }
}
