<?php
namespace vengine\Repositories\Location;

class ZoneRepository extends \vengine\Repositories\BaseRepository
{
    public function __construct(
    \vengine\Models\Zone $model
            ) {
        $this->model = $model;
        $this->rules = \vengine\Models\Zone::$rules;
        $this->with(['countries', 'hotel', 'company']);
    }
}