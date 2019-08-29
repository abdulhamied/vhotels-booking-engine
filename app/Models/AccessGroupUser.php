<?php namespace vengine\Models;

use Illuminate\Database\Eloquent\Model;

class AccessGroupUser extends Model {

    protected $fillable = ['access_group_id', 'user_id', 'created_by', 'updated_by'];
    public static $rules = [
      'access_group_id' => 'required',
      'user_id' => 'required',
      'created_by' => '',
      'updated_by' => ''
    ];

    public function accessGroups()
    {
      return $this->belongsTo('\vengine\Models\AccessGroup', "access_group_id");
    }
}
