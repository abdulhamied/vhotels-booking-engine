<?php
namespace vengine\Repositories\CacheTariff;

class RoomCategoryAvailabilityService {
    public static function getRoomCategoryAvailabilityStatus($hotelID, $roomTypeID, $selectedDate) {
        $roomAvailabilityList = \vengine\Models\RoomCategory::with(['hotelMealTypes', 
            'hotelMealTypes.availability' => function($q) use($selectedDate, $roomTypeID){
                $q->where("selected_date", '=', $selectedDate)
                ->where("room_category_id", '=', $roomTypeID);
            }])->find($roomTypeID);
        return $roomAvailabilityList;
    }
}
