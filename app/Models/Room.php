<?php namespace vengine\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model {

        protected $fillable = [
            'room_category_id',
            'hotel_id',
            'code', 'description', 'baby_cot_availability',
            'extra_bed_allowed', 'number_of_rooms', 'company_id', 
            'created_by'
        ];
        public static $rules = [
            'company_id' => "",
            'room_category_id' => "required",
            'hotel_id' => "required",
            'code' => "required",
            'description' => "required", 
            'baby_cot_availability' => "boolean",
            'extra_bed_allowed' => "boolean", 
            'number_of_rooms' => ""
        ];
        
        public function roomCategory()
        {
            return $this->belongsTo('\vengine\Models\RoomCategory', "room_category_id");
        }
        
        public function hotel()
        {
            return $this->belongsTo('\vengine\Models\Hotel', 'hotel_id');
        }
        
        public function company()
        {
            return $this->belongsTo('\vengine\Models\Company', 'company_id');
        }
        
        public function occupancies()
        {
            return $this->hasMany('\vengine\Models\RoomOccupancy', "room_id");
        }
        
        
        public function facilities()
        {
            return $this->belongsToMany(
                    '\vengine\Models\FacilityAndAmenity',
                    'facilities_and_amenity_rooms',
                    'room_id',
                    'facilities_and_amenity_id'
                    );
        }
        
        public function image()
        {
                return $this->morphOne('\vengine\Models\Gallery', 'imageable')
                        ->where('type', 'cover')->orderBy("id", "DESC");
        }

    
      public function gallery()
	{
		return $this->morphMany('\vengine\Models\Gallery', 'imageable')
                        ->where('type', 'gallery');
	}
}
