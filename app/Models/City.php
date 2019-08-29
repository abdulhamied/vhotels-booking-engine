<?php namespace vengine\Models;

use Illuminate\Database\Eloquent\Model;
use Elasticquent\ElasticquentTrait;

class City extends Model {

        use ElasticquentTrait;
        
        protected $fillable = [
            'name', 'country_id'
        ];
        public static $rules = [
            'name' => "required",
            'country_id' => "required"
        ];
        
        public function country()
        {
            return $this->belongsTo('\vengine\Models\Country', 'country_id' );
        }
}
