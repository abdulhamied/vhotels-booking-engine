<?php
namespace vengine\Http\Controllers\Api;

class SocialLinkController extends \vengine\Http\Controllers\Api\BaseController{
    public function __construct(
    \vengine\Repositories\General\SocialLinkRepository $repository
            ) {
        $this->repository = $repository;
    }
}
