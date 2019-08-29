<?php namespace vengine\Models;

use Illuminate\Database\Eloquent\Model;

class FacilityAndAmenityRoom extends Model {
        
        protected $table= "facilities_and_amenity_rooms";
        protected $fillable = [
            'facilities_and_amenity_id', 'room_id',  'created_by'
        ];
        public static $rules = [
            'facilities_and_amenity_id' => "required|unique_multiple:facilities_and_amenity_rooms,facilities_and_amenity_id,room_id",
            'room_id' => "required"
        ];
      
        public $timestamps = false;
}
