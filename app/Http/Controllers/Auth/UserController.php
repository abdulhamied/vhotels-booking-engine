<?php
namespace vengine\Http\Controllers\Auth;
use vengine\Repositories\User\UserRepository;

class UserController extends \vengine\Http\Controllers\Controller{
    protected $userRepository;
    public function __construct(UserRepository $repository) {
        $this->userRepository = $repository;
    }
    
    public function getAuthUser()
    {
        $userID = \Auth::id();
        return $this->userRepository->get($userID);
    }
}
