<?php namespace vengine\Models;

use Illuminate\Database\Eloquent\Model;

class Attribute extends Model {

        protected $fillable = [
            'key', 'value', 'display_name',
            'sort_order', 'type' , 
            'company_id', 'created_by'
        ];
        public static $rules = [
            'key' => "required",
            'value' => "required",
            'display_name' => "required",
            'type' => "required"
        ];


}
