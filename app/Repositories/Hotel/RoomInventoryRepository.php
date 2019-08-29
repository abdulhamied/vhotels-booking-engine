<?php
namespace vengine\Repositories\Hotel;
use Carbon\Carbon;
class RoomInventoryRepository extends \vengine\Repositories\BaseRepository
{
    public function __construct(
    \vengine\Models\RoomInventory $model
            ) {
                $this->model = $model;
                $this->rules = \vengine\Models\RoomInventory::$rules;
                $this->with([]);
    }
    
    public function setRoomInventoryForDay($roomCategoryID, $date, $count)
    {
        $roomInventoryObj = $this->model
                ->where("date", '=', $date)
                ->where("room_category_id", '=' , $roomCategoryID)
                ->first();
        $roomObj = \vengine\Models\RoomCategory::find($roomCategoryID);
        if(empty($roomInventoryObj))
        {
            $tempObj = new $this->model([
                'date' => $date,
                'room_category_id' => $roomCategoryID,
                'hotel_id' => $roomObj->hotel_id,
                'room_id' => $roomObj->id,
                'room_count' => $count,
                'room_count_booked' => 0,
                'created_by' => \Auth::id()
            ]);
            $tempObj->save();
            return $tempObj;
        }
        $roomInventoryObj->room_count = $count;
        $roomInventoryObj->save();
        return $roomInventoryObj;
    }
    
    public function setRoomInventoryForDuration($roomCategoryID, $startDate,  $endDate, $roomCount)
    {
//        $roomInventoryObjects = $this->model
//                ->where("date", ">=", $startDate)
//                ->where("date" , "<=", $endDate)
//                ->where("room_category_id", '=', $roomCategoryID)
//                ->get();
//        
//        
//        if(count($roomInventoryObjects->toArray()) != 0)
//        {
//            return false;
//        }
        $roomObj = \vengine\Models\Room::find($roomCategoryID);
        $startDateCarbon = Carbon::createFromTimestamp(strtotime($startDate));
        $endDateCarbon = Carbon::createFromTimestamp(strtotime($endDate));
        $dateDiff = $startDateCarbon->diff($endDateCarbon)->days;
     
        for($i=0; $i < ($dateDiff+1); $i++)
        {
            $date = $startDateCarbon->toDateString();
            
            $tempObj = new $this->model([
                'date' => $date,
                'hotel_id' => $roomObj->hotel_id,
                'room_category_id' => $roomCategoryID,
                'room_count' => $roomCount,
                'room_count_booked' => 0,
                'created_by' => \Auth::id()
            ]);
            $tempObj->save();
            $startDateCarbon->addDay();
        }
        
        return true;
    }
    
    public function getRoomCountInArray($array, $date)
    {
        foreach ($array as $eachObject) {
            if($eachObject->date == $date)
            {
                return $eachObject->room_count;
            }
        }
        return null;
    }
    
    public function getRoomInventoryForDuration($roomCategoryID, $startDate, $endDate)
    {
        $roomInventoryObjects = $this->model
            ->where("date", ">=", $startDate)
            ->where("date" , "<=", $endDate)
            ->where("room_category_id", '=', $roomCategoryID)
            ->get();
        
        $roomInventoryObjectsArray = [];
        $startDateCarbon = Carbon::createFromTimestamp(strtotime($startDate));
        $endDateCarbon = Carbon::createFromTimestamp(strtotime($endDate));
        $dateDiff = $startDateCarbon->diff($endDateCarbon)->days;
        
        $roomInventoryObjectsArray[] = [
          'date' => $startDateCarbon->toDateString(),
          'count' => $this->getRoomCountInArray($roomInventoryObjects, $startDateCarbon->toDateString())
        ];
        for($i=0; $i < $dateDiff; $i++)
        {
            $tempDate = $startDateCarbon->toDateString();
            if(intval(date('d',strtotime($tempDate))) > intval(date("t", strtotime($tempDate))))
            {
                continue;
            }
            $roomInventoryObjectsArray[] = [
                'date' =>$tempDate,
                'count' => $this->getRoomCountInArray($roomInventoryObjects, $tempDate)
              ];
            $startDateCarbon->addDay();
        }
        
        
        return $roomInventoryObjectsArray;
    }
    
    
}