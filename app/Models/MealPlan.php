<?php namespace vengine\Models;

use Illuminate\Database\Eloquent\Model;

class MealPlan extends Model {

        protected $fillable = [
            'meal_type_id', 'tariff_id', 'is_default',
            'adult_rate', 'child_rate', 'infant_rate', 'teen_rate', 'created_by'
        ];
        public static $rules = [
            'meal_type_id' => "required",
            'tariff_id' => "required",
            'is_default' => "boolean",
            'adult_rate' =>"",
            'child_rate' =>"",
            'infant_rate' =>"",
            'teen_rate' =>"",
        ];
        
        public function tariff()
        {
            return $this->belongsTo('\vengine\Models\Tariff', 'tariff_id');
        }
        
        public function mealType()
        {
            return $this->belongsTo('\vengine\Models\MealType','meal_type_id');
        }
	

}
