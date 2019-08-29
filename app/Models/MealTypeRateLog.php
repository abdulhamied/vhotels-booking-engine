<?php namespace vengine\Models;

use Illuminate\Database\Eloquent\Model;

class MealTypeRateLog extends Model {

        protected $fillable = [
            'adult_rate', 'teen_rate', 'child_rate', 'infant_rate',
            'meal_type_id', 'created_by'
        ];
        public static $rules = [
            'adult_rate' => 'required',
            'teen_rate' => '',
            'child_rate' => '',
            'infant_rate' => '',
            'meal_type_id' => "required"
        ];
        

}
