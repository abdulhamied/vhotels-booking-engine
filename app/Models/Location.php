<?php namespace vengine\Models;

use Illuminate\Database\Eloquent\Model;

class Location extends Model {

        protected $fillable = [
            'place', 'country_id', 'city_id'
        ];
        public static $rules = [
            'place' => "required",
            'country_id' => "required|exists:countries,id",
            'city_id' => "required|exists:cities,id",
        ];

	public function city()
        {
            return $this->belongsTo('\vengine\Models\City', "city_id");
        }

        public function country()
        {
            return $this->belongsTo('\vengine\Models\Country', "country_id");
        }

}
