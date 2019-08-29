<?php namespace vengine\Models;

use Illuminate\Database\Eloquent\Model;

class AccessGroup extends Model {

    protected $fillable = ['title', 'created_by', 'updated_by'];
    public static $rules = [
      'title' => 'required',
      'created_by' => '',
      'updated_by' => ''
    ];

    public function permissions()
    {
        return $this->belongsToMany(
             '\vengine\Models\ResourcePermission',
             'access_group_permissions',
             'access_group_id',
             'resource_permission_id');
    }

    public function resourceAccess()
    {
      return $this->belongsToMany(
           '\vengine\Models\ResourceAccess',
           'access_group_resources',
           'access_group_id',
           'resource_access_id');
    }

    public function users()
    {
      return $this->belongsToMany(
           '\vengine\User',
           'access_group_users',
           'access_group_id',
           'user_id');
    }

}
