<?php
namespace vengine\Repositories\Hotel;

class MealPlanRepository extends \vengine\Repositories\BaseRepository
{
    protected $cacheTariff;
    
    public function __construct(
    \vengine\Models\MealPlan $model,
    \vengine\Repositories\CacheTariff\CacheTariffBaseService $cacheTariffRepository
            ) {
                $this->cacheTariff = $cacheTariffRepository;
                $this->model = $model;
                $this->rules = \vengine\Models\MealPlan::$rules;
                $this->with(['mealType']);
    }
    
    public function store($data) {
      
        $check = parent::store($data);
        if($check)
        {
            $this->cacheTariff->addMealPlan($this->storedObject);
        }
        return $check;
    }
}