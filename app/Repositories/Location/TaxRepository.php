<?php
namespace vengine\Repositories\Location;

class TaxRepository extends \vengine\Repositories\BaseRepository
{
    public function __construct(
    \vengine\Models\Tax $model
            ) {
        $this->model = $model;
        $this->rules = \vengine\Models\Tax::$rules;
        $this->with(['country', 'tariffs']);
    }
    
    public function getTaxBetweenDuration($startDate, $endDate)
    {
        return $this->model->with(['country'])->where('start_date', "<=" , $startDate)
                ->where("end_date", ">=", $endDate)->get();
    }
    
}