<?php namespace vengine\Models;

use Illuminate\Database\Eloquent\Model;

class HotelServiceRate extends Model {

        protected $fillable = [
            'hotel_service_id', 
            'start_date' , 'end_date',
            'adult_rate' , 'child_rate', 'infant_rate', 'teen_rate',
            'number_of_days', 'time_details',
            'company_id', 'hotel_id', 'created_by'
        ];
        public static $rules = [
            'hotel_service_id' => "required",
            'start_date' => "required|date",
            'end_date' => "required|date",
            'adult_rate' => "required",
            'child_rate' => "",
            'teen_rate' => "",
            'infant_rate' => "",
            'number_of_days' => "required|numeric",
            'time_details' => "required",
            'hotel_id' => "required",
            'company_id' => ""
        ];
        
        public function hotel()
        {
            return $this->belongsTo('\vengine\Models\Hotel', 'hotel_id');
        }
	
        public function company()
        {
            return $this->belongsTo('\vengine\Models\Company', 'company_id');
        }
	
        public function hotelService()
        {
            return $this->belongsTo('\vengine\Models\HotelService', 'hotel_service_id');
        }
	

}
