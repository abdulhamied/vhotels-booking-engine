<?php namespace vengine\Models;

use Illuminate\Database\Eloquent\Model;

class Zone extends Model {

        protected $fillable = [
            'hotel_id', 'start', 'end', 
            'status', 'name', 'description', 'company_id', 'created_by'
        ];
        public static $rules = [
            'hotel_id' => "required",
            'start' => "date",
            'end' => "date|after:start",
            'status' => "required|in:active,expired",
            'name' => "required",
            'description' => ""
        ];
        
        public function hotel()
        {
            return $this->belongsTo('\vengine\Models\Hotel', 'hotel_id', 'id');
        }
        
        public function company()
        {
            return $this->belongsTo('\vengine\Models\Company', 'company_id', 'id');
        }
        
        public function countries()
        {
            return $this->belongsToMany('\vengine\Models\Country');
        }
}
