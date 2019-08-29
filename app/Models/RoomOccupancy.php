<?php namespace vengine\Models;

use Illuminate\Database\Eloquent\Model;

class RoomOccupancy extends Model {

        protected $fillable = [
            'room_id', 
            'adult_occupancy', 'teen_occupancy', 'person_occupancy',
            'child_occupancy', 'infant_occupancy', 'company_id', 'created_by'
        ];
        public static $rules = [
            'room_id' => "required",
            'adult_occupancy' => "required",
            'teen_occupancy' => "",
            'child_occupancy' => "",
            'infant_occupancy' => ""
        ];
        
        public function room()
        {
            return $this->belongsTo('\vengine\Models\Room', 'room_id');
        }
	

}
