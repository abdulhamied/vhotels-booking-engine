<?php namespace vengine\Models;

use Illuminate\Database\Eloquent\Model;

class Tax extends Model {

        protected $fillable = [
            'name', 'country_id',
            'start_date', 'end_date', 'type',
            'amount', 'created_by'
        ];
        public static $rules = [
            'name' => "required",
            'country_id' => "required",
            'start_date' => "required|date",
            'end_date' => "date|after:start_date",
            'type' => "required|in:fixed,percent,per_person,service_charge",
            'amount' => "required"
        ];
        
        public function country()
        {
            return $this->belongsTo('\vengine\Models\Country', 'country_id');
        }
	
        public function tariffs()
        {
            return $this->belongsToMany(
                    '\vengine\Models\Tariff',
                    'tariff_taxes',
                    'tax_id',
                    'tariff_id'
                    );
        }

}
