<?php
namespace vengine\Repositories\Hotel;

class MealTypeRepository extends \vengine\Repositories\BaseRepository
{
    protected $mealTypeRateLog;
    public function __construct(
    \vengine\Models\MealType $model,
     \vengine\Repositories\Log\MealTypeRateLogRepository $mealTypeRateLog
            ) {
                $this->model = $model;
                $this->rules = \vengine\Models\MealType::$rules;
                $this->with(['hotel']);
                $this->mealTypeRateLog = $mealTypeRateLog;
    }
    
    public function store($data) {
        $response = parent::store($data);
        if(!$response){
            return false;
        }
        
        $tempData = [
            'adult_rate' => $this->storedObject->adult_rate,
            'teen_rate' => $this->storedObject->teen_rate,
            'child_rate' => $this->storedObject->child_rate,
            'infant_rate' => $this->storedObject->infant_rate,
            'meal_type_id' => $this->storedObject->id,
        ];
        
        $this->mealTypeRateLog->store($tempData);
        
        return true;
    }
    
    public function update($id, $data) {
        $response = parent::update($id, $data);
        if(!$response){
            return false;
        }
        
        $tempData = [
            'adult_rate' => $this->storedObject->adult_rate,
            'teen_rate' => $this->storedObject->teen_rate,
            'child_rate' => $this->storedObject->child_rate,
            'infant_rate' => $this->storedObject->infant_rate,
            'meal_type_id' => $this->storedObject->id,
        ];
        
        $this->mealTypeRateLog->store($tempData);
        
        return true;
    }
}