<?php namespace vengine\Models;

use Illuminate\Database\Eloquent\Model;

class RoomCategory extends Model {

        protected $fillable = [
            'name', 'company_id', 'created_by', 'updated_by', 'hotel_id'
        ];
        public static $rules = [
            'name' => "required",
            'hotel_id' => 'required'
        ];

        public function rooms()
        {
            return $this->hasMany('\vengine\Models\Room', 'room_category_id');
        }
        
        public function hotel()
        {
            return $this->belongsTo('\vengine\Models\Hotel', 'hotel_id');
        }
        
        public function company()
        {
            return $this->belongsTo('\vengine\Models\Company', 'company_id');
        }
        
        public function hotelMealTypes()
        {
            return $this->hasMany('\vengine\Models\MealType', 'hotel_id', 'hotel_id');
        }
        
        
        
}
