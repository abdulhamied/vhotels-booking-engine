<?php namespace vengine\Models;

use Illuminate\Database\Eloquent\Model;

class PackageRate extends Model {

        protected $fillable = [
            'currency_id', 'zone_id', 
            'start_date', 'end_date',
            'single', 'double', 'twin', 'triple', 'quadruple',
            'pax_5', 'pax_6', 'pax_7', 'pax_8', 'pax_9', 'pax_10',
            'child_rate', 'teen_rate', 'infant_rate', 
            'package_id', 'created_by'
        ];
        public static $rules = [
            'currency_id' => 'required',
            'zone_id' => 'required',
            'start_date' => 'required|date',
            'end_date' => "required|date|after:start_date",
            'single' => 'required',
            'double' => 'required',
            'twin' => 'required', 
            'triple' =>  'required',
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
            'package_id' => 'required',
            
        ];
        
        public function currency()
        {
            return $this->belongsTo('\vengine\Models\Currency', 'currency_id');
        }
        
        public function zone()
        {
            return $this->belongsTo('\vengine\Models\Zone', 'zone_id');
        }
        
        public function package()
        {
            return $this->belongsTo('\vengine\Models\Package','package_id');
        }
	

}
