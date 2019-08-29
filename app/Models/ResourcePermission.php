<?php namespace vengine\Models;

use Illuminate\Database\Eloquent\Model;

class ResourcePermission extends Model {

        protected $fillable = [
            'name', 'resource_table', 'list', 'get', 'create', 'update',
            'created_by', 'updated_by'
        ];
        public static $rules = [
            'name' => 'required',
            'resource_table' => 'required',
            'list' => 'required',
            'get' => 'required',
            'create' => 'required',
            'update' => 'required',
            'user_id' =>''
        ];
        

}
