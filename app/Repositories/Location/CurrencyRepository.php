<?php
namespace vengine\Repositories\Location;

class CurrencyRepository  extends \vengine\Repositories\BaseRepository{
    public function __construct(\vengine\Models\Currency $model) {
        $this->model = $model;
        $this->rules = \vengine\Models\Currency::$rules;
        $this->with([]);
    }
}
