<?php
namespace vengine\Repositories\Hotel;

class EnhancementRateRepository extends \vengine\Repositories\BaseRepository{
    public function __construct(\vengine\Models\EnhancementRate $model) {
        $this->model = $model;
        $this->rules = \vengine\Models\EnhancementRate::$rules;
        $this->with([]);
    }
}
