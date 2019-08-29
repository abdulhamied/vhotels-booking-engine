<?php
namespace vengine\Repositories\Log;

class MealTypeRateLogRepository  extends \vengine\Repositories\BaseRepository{
    public function __construct(
    \vengine\Models\MealTypeRateLog $model
            ) {
        $this->model = $model;
    }
}
