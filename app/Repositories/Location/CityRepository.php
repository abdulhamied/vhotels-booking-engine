<?php
namespace vengine\Repositories\Location;

class CityRepository  extends \vengine\Repositories\BaseRepository{
    public function __construct(\vengine\Models\City $model) {
        $this->model = $model;
        $this->rules = \vengine\Models\City::$rules;
        $this->withParams  = ['country'];
    }
}
