<?php namespace vengine\Models;

use Illuminate\Database\Eloquent\Model;

class App extends Model {

        protected $fillable = [
            'name', 'token', 'access_levels',
            'created_by', 'updated_by'
        ];
        public static $rules = [
            'name' => 'required', 
            'token' => 'required', 
            'access_levels' => 'required', 
            'created_by' => '', 
            'updated_by' => ''
        ];


}
