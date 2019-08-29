<?php namespace vengine\Models;

use Illuminate\Database\Eloquent\Model;

class Currency extends Model {

        protected $fillable = [
            'name', 'description' , 'symbol'
        ];
        public static $rules = [
            'name' => "required",
            'description' => "",
            'symbol' => "required"
        ];

	

}
