<?php
namespace vengine\Repositories\Location;

class LocationRepository  extends \vengine\Repositories\BaseRepository{
    public function __construct(\vengine\Models\Location $model) {
        $this->model = $model;
        $this->rules = \vengine\Models\Location::$rules;
        $this->with(['city', 'country']);
    }
}
