<?php namespace vengine\Models;

use Illuminate\Database\Eloquent\Model;

class HotelService extends Model {

        protected $fillable = [
            'hotel_id', 'service_id',
            'company_id', 'created_by', 'description'
        ];
        public static $rules = [
            'company_id' => "",
            'hotel_id' => "required",
            'service_id' => "required"
        ];
        
        public function hotel()
        {
            return $this->belongsTo('\vengine\Models\Hotel', 'hotel_id');
        }
	
        public function company()
        {
            return $this->belongsTo('\vengine\Models\Company', 'company_id');
        }
	
        public function service()
        {
            return $this->belongsTo('\vengine\Models\Service', 'service_id');
        }
	

}
