<?php namespace vengine\Models;

use Illuminate\Database\Eloquent\Model;

class TariffTax extends Model {

        protected $fillable = [
            'tariff_id', 
            'tax_id',
            'inclusive',
            'created_by'
        ];
        public static $rules = [
            'tariff_id' => "required",
            'tax_id' => "required",
            'inclusive' => "required"
        ];
        
	

}
