<?php
namespace vengine\Repositories\Hotel;

class RoomCategoryRepository extends \vengine\Repositories\BaseRepository
{
    public function __construct(
    \vengine\Models\RoomCategory $model
            ) {
                $this->model = $model;
                $this->rules = \vengine\Models\RoomCategory::$rules;
                $this->with(['rooms', 'hotel', 'company', 'hotel.mealtypes', 'hotelMealTypes']);
    }

    public function getHotelCategories($hotelID)
    {
        $model = $this->prepareQuery();
        $data = $model
            ->whereHas("rooms", function($query) use ($hotelID){
            $query->where("hotel_id", '=', $hotelID);
        })->get();
        return $data;
    }
    
    public function store($data) {
        $response = parent::store($data);
        if($response)
        {
            $roomRepo = \App::make('\vengine\Repositories\Hotel\RoomRepository');
            $roomRepo->store([
                'room_category_id' => $this->storedObject->id,
                'hotel_id' => $this->storedObject->hotel_id,
                'code' => $this->storedObject->name,
                'description' => $this->storedObject->name,
                'baby_cot_availability' => false,
                'extra_bed_allowed' => false, 
                'number_of_rooms' => 0
            ]);
        }
        return $response;
    }
}