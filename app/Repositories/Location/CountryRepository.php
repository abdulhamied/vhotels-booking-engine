<?php
namespace vengine\Repositories\Location;

class CountryRepository  extends \vengine\Repositories\BaseRepository{
    public function __construct(\vengine\Models\Country $model) {
        $this->model = $model;
        $this->rules = \vengine\Models\Country::$rules;
        $this->with(['cities']);
    }
}
