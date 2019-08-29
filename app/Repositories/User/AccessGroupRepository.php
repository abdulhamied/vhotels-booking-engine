<?php
namespace vengine\Repositories\User;

class AccessGroupRepository extends \vengine\Repositories\BaseRepository {

    public function __construct(
    \vengine\Models\AccessGroup $model
            ) {
        $this->model = $model;
        $this->rules = \vengine\Models\AccessGroup::$rules;
        $this->withParams = ['permissions', 'resourceAccess', 'users'];
    }

    public function attachUser($userID, $accessGroupID)
    {
        $userObj = \vengine\User::find($userID);
        $accessGroupObj = $this->model->find($accessGroupID);
        $accessGroupObj->users()->attach($userObj);
        return $accessGroupObj;
    }
    
    public function detachUser($userID, $accessGroupID)
    {
//        $userObj = \vengine\User::find($userID);
        $accessGroupObj = $this->model->find($accessGroupID);
        $accessGroupObj->users()->detach($userID);
        return true;
    }

    public function attachPermission($permissionID, $accessGroupID)
    {
          $accessGroupObj = $this->model->find($accessGroupID);
          $resourcePermissionObj = \vengine\Models\ResourcePermission::find($permissionID);
          $accessGroupObj->permissions()->attach($resourcePermissionObj);
          return $accessGroupObj;
    }
    
    public function detachPermission($permissionID, $accessGroupID)
    {
        $accessGroupObj = $this->model->find($accessGroupID);
        $accessGroupObj->permissions()->detach($permissionID);
        return true;
    }

    public function attachResource($resourceAccessID, $accessGroupID)
    {
        $accessGroupObj = $this->model->find($accessGroupID);
        $resourceAccessObj = \vengine\Models\ResourceAccess::find($resourceAccessID);
        $accessGroupObj->resourceAccess()->attach($resourceAccessObj);
        return $accessGroupObj;
    }
    
    public function detachResource($resourceAccessID, $accessGroupID)
    {
        $accessGroupObj = $this->model->find($accessGroupID);
        $accessGroupObj->resourceAccess()->detach($resourceAccessID);
        return true;
    }

}
