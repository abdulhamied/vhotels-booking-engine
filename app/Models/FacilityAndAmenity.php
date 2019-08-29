<?php namespace vengine\Models;

use Illuminate\Database\Eloquent\Model;

class FacilityAndAmenity extends Model {

        protected $table = "facilities_and_amenities";
        protected $fillable = [
            'type', 'name', 'company_id' , 'created_by', 'icon', 
            'icon_type', 'icon_name'
        ];
        public static $rules = [
            'type' => "required|in:facility,amenity",
            'name' => "required",
            'company_id' => "",
            'icon' => 'image'
        ];
        
        public function rooms()
        {
            return $this->belongsToMany(
                    '\vengine\Models\FacilityAndAmenity',
                    'facilities_and_amenity_rooms',
                    'facilities_and_amenity_id',
                    'room_id'
                    );
        }
        
        public function hotels()
        {
            return $this->belongsToMany(
                    '\vengine\Models\FacilityAndAmenity',
                    'facilities_and_amenity_hotels',
                    'facilities_and_amenity_id',
                    'hotel_id'
                    );
        }
        
        public function company()
        {
            return $this->belongsTo('\vengine\Models\Company', 'company_id');
        }
        
        public function getIconAttribute($data)
        {
            return json_decode($data);
        }

}
