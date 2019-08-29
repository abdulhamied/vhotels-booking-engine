<?php
namespace vengine\Repositories\Location;

class CountryZoneRepository extends \vengine\Repositories\BaseRepository
{
    public function __construct(
    \vengine\Models\CountryZone $model
            ) {
        $this->model = $model;
        $this->rules = \vengine\Models\CountryZone::$rules;
        $this->with([]);
    }
    
    public function destroy($id) {
        $obj = $this->model->where("country_id" , '=', $id);
        if(empty($obj))
            return false;
        $obj->delete();
        return true;
    }
}