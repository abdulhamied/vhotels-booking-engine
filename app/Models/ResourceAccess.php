<?php namespace vengine\Models;

use Illuminate\Database\Eloquent\Model;

class ResourceAccess extends Model {

        protected $fillable = [
            'name',
            'resource_value',
            'resource_type', 'resource_table', 'resource_id', 'access',
            'created_by', 'updated_by'
        ];
        public static $rules = [
            'name' => 'required',
            'resource_value' => '',
            'resource_table' => 'required',
            'resource_type' => 'required',
            'resource_id' => 'required',
            'access' => 'required'
        ];


}
