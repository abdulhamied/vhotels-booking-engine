<?php namespace vengine\Models;

use Illuminate\Database\Eloquent\Model;

class SocialLink extends Model {

        protected $fillable = [
            'type', 'value', 'hotel_id',  'created_by'
        ];
        public static $rules = [
            'type' => "required",
            'value' => "required",
            'hotel_id' => "required"
        ];
        
        public function hotel()
        {
            return $this->belongsTo("\vengine\Models\Hotel", 'hotel_id');
        }
	

}
