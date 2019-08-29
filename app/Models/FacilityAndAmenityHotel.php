<?php namespace vengine\Models;

use Illuminate\Database\Eloquent\Model;

class FacilityAndAmenityHotel extends Model {
        
        protected $table= "facilities_and_amenity_hotels";
        protected $fillable = [
            'facilities_and_amenity_id', 'hotel_id',  'created_by'
        ];
        public static $rules = [
            'facilities_and_amenity_id' => "required|unique_multiple:facilities_and_amenity_hotels,facilities_and_amenity_id,hotel_id",
            'hotel_id' => "required"
        ];
      
        public $timestamps = false;
}
