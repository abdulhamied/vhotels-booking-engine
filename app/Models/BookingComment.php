<?php namespace vengine\Models;

use Illuminate\Database\Eloquent\Model;

class BookingComment extends Model {

        protected $fillable = [
            'booking_code',  'type', 'comment', 'is_flagged',
            'created_by', 'updated_by'
        ];
        public static $rules = [
            'booking_code' => "required",
            'type' => "required",
            'comment' => "required"
        ];
       
	

}
