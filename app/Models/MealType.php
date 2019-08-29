<?php namespace vengine\Models;

use Illuminate\Database\Eloquent\Model;

class MealType extends Model {

        protected $fillable = [
            'name', 'hotel_id', 'created_by',
            'adult_rate', 'teen_rate', 'child_rate', 'infant_rate'
        ];
        public static $rules = [
            'name' => "required",
            'hotel_id' => "required",
            'adult_rate' => 'required',
            'teen_rate' => '',
            'child_rate' => '',
            'infant_rate' => ''
        ];
        
        public function hotel()
        {
            return $this->belongsTo('\vengine\Models\Hotel', 'hotel_id');
        }
        
	public function availability()
        {
            return $this->hasOne('\vengine\Models\RoomAvailability', "meal_type_id");
        }

}
