<?php namespace vengine\Models;

use Illuminate\Database\Eloquent\Model;

class HotelTransfer extends Model {

        protected $fillable = [
            'hotel_id', 'currency_id', 'start_date', 'end_date',
            'vessel', 'description', 'occupancy_adult', 
            'occupancy_teen', 'occupancy_child', 'occupancy_infant', 
            'type', 'adult_amount', 'teen_amount',  'child_amount', 
            'infant_amount', 'created_by', 
            'infant_age_range_id', 'child_age_range_id',
            'teen_age_range_id', 'adult_age_range_id', 'age_ranges'
        ];
        public static $rules = [
            'hotel_id' => "required", 
            'infant_age_range_id' => "required", 
            'child_age_range_id' => "required", 
            'teen_age_range_id' => "", 
            'adult_age_range_id' => "required", 
            'currency_id' => "required", 
            'start_date' => "required|date", 
            'end_date' => "required|date|after:start_date",
            'vessel' => "required", 
            'description' => "required",
            'occupancy_adult' => "required", 
            'occupancy_teen' => "required", 
            'occupancy_child' => "required", 
            'occupancy_infant' => "required", 
            'type' => "required|in:oneway,return", 
            'adult_amount' => "required", 
            'teen_amount' => "",  
            'child_amount' => "required", 
            'infant_amount'=> "required"
        ];
        
        public function infantAgeRange()
        {
            return $this->belongsTo('\vengine\Models\AgeRange', "infant_age_range_id");
        }
        
        public function childAgeRange()
        {
            return $this->belongsTo('\vengine\Models\AgeRange', "child_age_range_id");
        }
        
        public function teenAgeRange()
        {
            return $this->belongsTo('\vengine\Models\AgeRange', "teen_age_range_id");
        }
        
        public function adultAgeRange()
        {
            return $this->belongsTo('\vengine\Models\AgeRange', "adult_age_range_id");
        }
        
        public function hotel()
        {
            return $this->belongsTo('\vengine\Models\Hotel', "hotel_id");
        }
        
        public function currency()
        {
            return $this->belongsTo('\vengine\Models\Currency', "currency_id");
        }
	
}
