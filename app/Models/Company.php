<?php namespace vengine\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model {

        protected $fillable = [
            'name', 'active', 'company_type'
        ];
        public static $rules = [
            'name' => "required",
            'active' => "",
            'company_type' => "required"
        ];
       
	

}
