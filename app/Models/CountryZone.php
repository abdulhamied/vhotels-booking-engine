<?php namespace vengine\Models;

use Illuminate\Database\Eloquent\Model;

class CountryZone extends Model {

    protected $table = "country_zone";
    
        protected $fillable = [
            'country_id', 'zone_id', 'hotel_id'
        ];
        public static $rules = [
            'country_id' => "required|exists:countries,id|unique_multiple:country_zone,country_id,hotel_id",
            'zone_id' => "required|exists:zones,id"
        ];
        public $timestamps = false;
}
