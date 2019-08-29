<?php namespace vengine\Models;

use Illuminate\Database\Eloquent\Model;

class AccessGroupResource extends Model {

    protected $fillable = ['access_group_id', 'resource_access_id', 'created_by', 'updated_by'];
    public static $rules = [
      'access_group_id' => 'required',
      'resource_access_id' => 'required',
      'created_by' => '',
      'updated_by' => ''
    ];

}
