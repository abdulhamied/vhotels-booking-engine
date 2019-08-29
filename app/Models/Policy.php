<?php namespace vengine\Models;

use Illuminate\Database\Eloquent\Model;

class Policy extends Model {

        protected $fillable = [
            'hotel_id', 'type', 'data', 'created_by', 'name'
        ];
        public static $rules = [
            'hotel_id' => "required",
            'name' => "required",
            'type' => 'required',
            'data' => "required"
        ];
        
        public function hotel()
        {
            return $this->belongsTo('\vengine\Models\Hotel','hotel_id');
        }
        
}
