<?php
namespace vengine\Http\Controllers\Api\User;
use Illuminate\Http\Request;
use Validator;

class AccessGroupController extends \vengine\Http\Controllers\Api\BaseController{
    public function __construct(
    \vengine\Repositories\User\AccessGroupRepository $repository
            ) {
        $this->repository = $repository;
    }

    public function setUser(Request $request)
    {
        $rules = [
          'user_id' => "required",
          'access_group_id' => 'required|unique_multiple:access_group_users,user_id,access_group_id'
        ];

        $validator = Validator::make($request->all(), $rules);
        if($validator->fails())
        {
            return $this->response(405, 'Validation Errors', $validator->messages(), 405 );
        }

        $data = $this->repository->attachUser($request->get("user_id"), $request->get("access_group_id"));
        return $this->success("User Set Successfully.", $data);

    }
    
    public function removeUser(Request $request)
    {
        $rules = [
          'user_id' => "required",
          'access_group_id' => 'required'
        ];

        $validator = Validator::make($request->all(), $rules);
        if($validator->fails())
        {
            return $this->response(405, 'Validation Errors', $validator->messages(), 405 );
        }

        $this->repository->detachUser($request->get("user_id"), $request->get("access_group_id"));
        return $this->success("User Removed Successfully.", []);
    }

    public function setPermission(Request $request)
    {
        $rules = [
          'resource_permission_id' => "required",
          'access_group_id' => 'required|unique_multiple:access_group_permissions,resource_permission_id,access_group_id'
        ];

        $validator = Validator::make($request->all(), $rules);
        if($validator->fails())
        {
            return $this->response(405, 'Validation Errors', $validator->messages(), 405 );
        }

        $data = $this->repository->attachPermission($request->get("resource_permission_id"), $request->get("access_group_id"));
        return $this->success("Permission Set Successfully.", $data);
    }
    public function removePermission(Request $request)
    {
        $rules = [
          'resource_permission_id' => "required",
          'access_group_id' => 'required'
        ];

        $validator = Validator::make($request->all(), $rules);
        if($validator->fails())
        {
            return $this->response(405, 'Validation Errors', $validator->messages(), 405 );
        }

        $this->repository->detachPermission($request->get("resource_permission_id"), $request->get("access_group_id"));
        return $this->success("Removed Successfully.", []);
    }
    

    public function setAccessResource(Request $request)
    {
        $rules = [
          'resource_access_id' => "required",
          'access_group_id' => 'required|unique_multiple:access_group_resources,resource_access_id,access_group_id'
        ];

        $validator = Validator::make($request->all(), $rules);
        if($validator->fails())
        {
            return $this->response(405, 'Validation Errors', $validator->messages(), 405 );
        }

        $data = $this->repository->attachResource($request->get("resource_access_id"), $request->get("access_group_id"));
        return $this->success("Resource Set Successfully.", $data);
    }
    
    public function removeAccessResource(Request $request)
    {
        $rules = [
          'resource_access_id' => "required",
          'access_group_id' => 'required'
        ];

        $validator = Validator::make($request->all(), $rules);
        if($validator->fails())
        {
            return $this->response(405, 'Validation Errors', $validator->messages(), 405 );
        }

        $this->repository->detachResource($request->get("resource_access_id"), $request->get("access_group_id"));
        return $this->success("Removed Successfully.", []);
    }
}
