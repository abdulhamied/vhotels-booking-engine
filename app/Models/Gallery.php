<?php namespace vengine\Models;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model {

        protected $fillable = [
            'name', 'caption', 'file', 'type',
        ];
        public static $rules = [
           'name' => "required", 
           'caption' => "", 
           'file' => "required", 
           'type' => "required|in:cover,gallery,logo",
        ];

        public $timestamps = false;
}
