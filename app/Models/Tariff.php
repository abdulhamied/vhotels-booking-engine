<?php namespace vengine\Models;

use Illuminate\Database\Eloquent\Model;

class Tariff extends Model {

        protected $fillable = [
           'room_category_id', 'room_id', 'currency_id', 'zone_id',
           'start_date', 'end_date', 'single', 'double', 'twin',
            'triple', 'quadruple', 'pax_5', 'pax_6', 'pax_7',
            'pax_8', 'pax_9', 'pax_10', 'child_rate',
            'teen_rate', 'infant_rate', 'baby_cot_rate',
            'extra_bed_rate', 'min_nights', 'max_nights', 'created_by', 
            'tax_data'
        ];
        public static $rules = [
            'room_category_id' => 'required',
            'room_id' => "",
            'currency_id' => "required", 
            'zone_id' =>  "required",
            'start_date' => "required|date",
            'end_date' => "required|date|after:start_date",
            'single' => "", 
            'twin' => "",
            'double' => "",
            'triple' => "", 
            'quadruple' => "",
            'pax_5' => "",
            'pax_6' => "",
            'pax_7' => "",
            'pax_8' => "",
            'pax_9' => "",
            'pax_10' => "",
            'child_rate' => "", 
            'teen_rate' => "", 
            'infant_rate' => "", 
            'baby_cot_rate' => "",
            'extra_bed_rate' => "", 
            'min_nights' => "required|required_with:max_nights|integer|min:1", 
            'max_nights' => "required|required_with:min_nights|integer|greater_than_field:min_nights",
            'tax_data' => ''
        ];
        
        public function zone()
        {
            return $this->belongsTo('\vengine\Models\Zone', "zone_id");
        }
        
        public function currency()
        {
            return $this->belongsTo('\vengine\Models\Currency', 'currency_id');
        }
        
        public function roomCategory()
        {
            return $this->belongsTo('\vengine\Models\RoomCategory', 'room_category_id');
        }
        
        public function room()
        {
            return $this->belongsTo('\vengine\Models\Room', 'room_id');
        }
        
        public function mealPlans()
        {
            return $this->hasMany('\vengine\Models\MealPlan', 'tariff_id');
        }
        public function taxes()
        {
            return $this->belongsToMany(
                        '\vengine\Models\Tax',
                    'tariff_taxes',
                    'tariff_id',
                    'tax_id'
                    )->withPivot(['inclusive']);
        }
	

}
