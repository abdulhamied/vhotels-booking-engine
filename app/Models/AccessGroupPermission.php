<?php namespace vengine\Models;

use Illuminate\Database\Eloquent\Model;

class AccessGroupPermission extends Model {

    protected $fillable = ['access_group_id', 'resource_permission_id', 'created_by', 'updated_by'];
    public static $rules = [
      'access_group_id' => 'required',
      'resource_permission_id' => 'required',
      'created_by' => '',
      'updated_by' => ''
    ];

}
