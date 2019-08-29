<?php namespace vengine\Models;

use Illuminate\Database\Eloquent\Model;

class CacheTariff extends Model {

        protected $fillable = [
            'tariff_id', 'hotel_id', 'room_type_id', 'currency_id',
            'zone_id',
            'min_nights', 'max_nights', 'date',
            'single', 'double', 'twin', 'triple', 'quadruple',
            'pax_5', 'pax_6', 'pax_7', 'pax_8', 'pax_9', 'pax_10',
            'child_rate', 'teen_rate', 'infant_rate', 
            'baby_cot_rate', 'extra_bed_rate', 'meal_plans',
            'created_by', 'updated_by'
        ];
        public static $rules = [
            'tariff_id' => '', 
            'hotel_id' => '', 
            'room_type_id' => '', 
            'min_nights' => '', 
            'max_nights' => '', 
            'date' => '',
            'single' => '', 
            'double' => '', 
            'twin' => '',
            'triple' => '', 
            'quadruple' => '',
            'pax_5' => '', 
            'pax_6' => '', 
            'pax_7' => '', 
            'pax_8' => '', 
            'pax_9' => '', 
            'pax_10' => '',
            'child_rate' => '', 
            'teen_rate' => '', 
            'infant_rate' => '', 
            'baby_cot_rate' => '', 
            'extra_bed_rate' => '', 
            'meal_plans' => '',
            'created_by' => '', 
            'updated_by' => ''
        ];
        
        public function country()
        {
            return $this->belongsTo('\vengine\Models\Country', 'country_id');
        }
        
        public function hotel()
        {
            return $this->belongsTo('\vengine\Models\Hotel', 'hotel_id');
        }
        
        public function roomCategory()
        {
            return $this->belongsTo('\vengine\Models\RoomCategory', 'room_type_id');
        }
        
        public function currency()
        {
            return $this->belongsTo('\vengine\Models\Currency', 'currency_id');
        }
        
        public function zone()
        {
            return $this->belongsTo('\vengine\Models\Zone', 'zone_id');
        }
        
        public function getMealPlansAttribute($data)
        {
            return json_decode($data);
        }
        
        
       

}
