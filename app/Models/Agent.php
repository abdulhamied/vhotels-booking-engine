<?php namespace vengine\Models;

use Illuminate\Database\Eloquent\Model;

class Agent extends Model {

        protected $fillable = [
            'name', 'markup_type', 'markup',
            'contact_id' , 'city_id', 'status'
        ];
        public static $rules = [
            'name' => "required",
            'markup_type' => "required|in:fixed,percent",
            'markup' => "",
            'contact_id' => "required|exists:contacts,id",
            'city_id' => "required|exists:locations,id",
            'status' => "required|in:requested,approved"
        ];

        public function contact()
        {
            return $this->belongsTo('\vengine\Models\Contact', "contact_id");
        }

        public function city()
        {
            return $this->belongsTo('\vengine\Models\City', "city_id");
        }

}