<?php namespace vengine\Models;

use Illuminate\Database\Eloquent\Model;

class RoomAvailability extends Model {

        protected $fillable = [
            'selected_date', 'type', 'meal_type_id', 
            'reason', 'room_category_id', 'hotel_id' , 'created_by'
        ];
        public static $rules = [
            'selected_date' => "required|date",
            'type' => 'required|in:close,open',
            'meal_type_id' => "required",
            'reason' => '',
            'room_category_id' => 'required',
            'hotel_id' => 'required'
        ];
        
        
        
        public function hotel()
        {
            return $this->belongsTo('\vengine\Models\Hotel', 'hotel_id');
        }
	

}
