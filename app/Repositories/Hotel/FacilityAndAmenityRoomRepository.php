<?php
namespace vengine\Repositories\Hotel;
use \Illuminate\Support\Facades\Input;

class FacilityAndAmenityRoomRepository extends \vengine\Repositories\BaseRepository
{
    public function __construct(
    \vengine\Models\FacilityAndAmenityRoom $model
            ) {
                $this->model = $model;
                $this->rules = \vengine\Models\FacilityAndAmenityRoom::$rules;
                $this->with([]);
    }
    
    public function destroy($id) {
        if(!Input::has("room_id")) return false;
        $obj = \vengine\Models\Room::with(['facilities'])->find(Input::get("room_id"));
        if(empty($obj))
            return false;
        
        $obj->facilities()->detach($id);
        return true;
    }
}