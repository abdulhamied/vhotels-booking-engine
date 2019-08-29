<?php namespace vengine\Models;

use Illuminate\Database\Eloquent\Model;

class UiFavouriteLink extends Model {

        protected $fillable = [
           'title', 'link', 'user_id'
        ];
        public static $rules = [
            'title' => "required",
            'link' => "required"
        ];
        

}
