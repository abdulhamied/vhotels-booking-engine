<?php namespace vengine\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model {

        protected $fillable = [
            'name',
        ];
        public static $rules = [
            'name' => "required"
        ];

}
