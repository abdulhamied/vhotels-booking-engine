<?php
namespace vengine\Http\Controllers\Api;
use Illuminate\Http\Request;

class AgentController extends \vengine\Http\Controllers\Api\BaseController{
    public function __construct(
    \vengine\Repositories\General\AgentRepository $repository
            ) {
        $this->repository = $repository;
    }

    public function login(Request $request)
    {
    	$rules = [
    		'email' => 'required|email',
    		'password' => 'required'
    	];
    	$validator = \Validator::make($request->all(), $rules);
    	if($validator->fails())
    	{
    		return $this->response(405, 'ValidationError', $validator->messages());
    	}
    	$email = $request->get("email");
    	$password = $request->get("password");
    	if (\Auth::attempt(['email' => $email, 'password' => $password, 'type' => 'agent'])) {
    		return $this->success('Successfully Logged In', \Auth::user() );
        }
        return $this->error('Error Logging In');
    }
}
