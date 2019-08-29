<?php
namespace vengine\Repositories\Hotel;
use \Illuminate\Support\Facades\Input;

class FacilityAndAmenityHotelRepository extends \vengine\Repositories\BaseRepository
{
    public function __construct(
    \vengine\Models\FacilityAndAmenityHotel $model
            ) {
                $this->model = $model;
                $this->rules = \vengine\Models\FacilityAndAmenityHotel::$rules;
                $this->with([]);
    }
    
    public function destroy($id) {
        if(!Input::has("hotel_id")) return false;
        $obj = \vengine\Models\Hotel::with(['facilities'])->find(Input::get("hotel_id"));
        if(empty($obj))
            return false;
        
        $obj->facilities()->detach($id);
        return true;
    }
}