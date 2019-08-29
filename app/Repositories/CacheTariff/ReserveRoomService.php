<?php
namespace vengine\Repositories\CacheTariff;

class ReserveRoomService {
    protected $roomAvailabilityModel;
    protected $roomInventoryModel;
    public function __construct(
    \vengine\Models\RoomAvailability $roomAvailabilityModel,
     \vengine\Models\RoomInventory $roomInventoryModel
            ) {
        $this->roomAvailabilityModel = $roomAvailabilityModel;
        $this->roomInventoryModel = $roomInventoryModel;
    }
    
    public function deductRoomCount($roomCategoryID, $mealPlanID, $numberOfRooms, 
            $startDate, $endDate)
    {
        //check if room is avialable (roomID, mealPlanID)
        //
        //NOT AVAILABLE IDDENTIFICATION QUERY
        //
        //SELECT * FROM vengine.room_availabilities 
        //WHERE room_category_id = 1 
        //AND meal_type_id = 1 AND type = "close"
        //AND selected_date  BETWEEN "2016-06-02" AND "2016-06-10"
        //
        $roomNotAvailableList  = \DB::table("room_availabilities")
                ->where("room_category_id", '=', $roomCategoryID)
                ->where("meal_type_id", '=', $mealPlanID)
                ->where("type", '=', 'close')
                ->whereBetween('selected_date', [$startDate, $endDate])
                ->get();
        
        
        //check if room Inventory is available
        //SELECT COUNT(*)
        //FROM
        //(
        //SELECT *, IF(room_count >= 6, "YES", "NO") as status FROM vengine.room_inventories 
        //WHERE 
        //room_category_id = 1 
        //AND date BETWEEN "2016-06-01" AND "2016-06-03" ) room_inventory_check
        //WHERE room_inventory_check.status = "NO"
        //
            $roomInventoryNotAvailableStatus = \DB::table(
                    \DB::raw('(
                        SELECT *, IF(room_count >= '.$numberOfRooms.', "YES", "NO") as status FROM vengine.room_inventories 
                        WHERE 
                        room_category_id = '.$roomCategoryID.'
                        AND date BETWEEN "'.$startDate.'" AND "'.$endDate.'" ) room_inventory_check')
                    )
                    ->where("room_inventory_check.status", '=', "NO")
                    ->count();
           
            if(!empty($roomNotAvailableList) && $roomInventoryNotAvailableStatus > 0)
            {
                return  [ 'code' => 0, 'message' => 'Room Not Available. Number of Rooms Not Available.'];
            }else if (!empty($roomNotAvailableList)){
                return  [ 'code' => 0, 'message' => 'Room Not Available.'];
            }else if($roomInventoryNotAvailableStatus > 0)
            {
                return  [ 'code' => 0, 'message' => 'Number of Rooms Not Available'];
            }
            
            
            $query = \DB::table("room_inventories")
                    ->where("room_category_id", '=', $roomCategoryID)
                    ->whereBetween('date', [$startDate, $endDate])
                    ;
            $query->increment("room_count_booked", $numberOfRooms);
            $query->decrement("room_count", $numberOfRooms);
            return  [ 'code' => 1, 'message' => 'Room Inventory Updated Successfully.'];
            

        
    }
}
