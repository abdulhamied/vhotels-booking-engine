<?php
namespace vengine\Http\Controllers\Api\Hotel;
use Illuminate\Http\Request;

class RoomInventoryController extends \vengine\Http\Controllers\Api\BaseController{
    public function __construct(
    \vengine\Repositories\Hotel\RoomInventoryRepository $repository
            ) {
        $this->repository = $repository;
    }
    
    public function setRoomInventoryForDate(Request $request)
    {
        $rules = [
            'date' => "required|date",
            'room_category_id' => "required|exists:room_categories,id",
            'count' => "required"
        ];
        
        $validator = \Validator::make($request->all(), $rules);
        if($validator->fails())
        {
            return $this->response(405, 'Validation Errors', $validator->messages(), 405);
        }
        
        return $this->repository->setRoomInventoryForDay(
                $request->get("room_category_id")
                , $request->get("date")
                , $request->get("count")
                );
    }
    
    public function setRoomInventory(Request $request)
    {
        $rules = [
            'start_date' => "required|date",
            'end_date' => "required|date",
            'room_category_id' => "required|exists:room_categories,id",
            'count' => "required"
        ];
        
        $validator = \Validator::make($request->all(), $rules);
        if($validator->fails())
        {
            return $this->response(405, 'Validation Errors', $validator->messages(), 405);
        }
        
        $checkState = $this->repository->setRoomInventoryForDuration(
                $request->get("room_category_id")
                ,$request->get("start_date")
                ,$request->get("end_date")
                ,$request->get("count")
                );
        if(!$checkState)
        {
            return $this->response(405, 'Count is set for the duration');
        }
        return $this->success('Successfully Set', []);
    }
    public function getRoomInventory(Request $request)
    {
        $rules = [
            'start_date' => "required|date",
            'end_date' => "required|date",
            'room_category_id' => "required|exists:room_categories,id",
        ];
        
        $validator = \Validator::make($request->all(), $rules);
        if($validator->fails())
        {
            return $this->response(405, 'Validation Errors', $validator->messages(), 405);
        }
        
        $data = $this->repository->getRoomInventoryForDuration(
                $request->get("room_category_id")
                ,$request->get("start_date")
                ,$request->get("end_date")
                );
        
        return $this->success('data', $data);
    }
    
    public function requestBooking(Request $request)
    {
        
    }
    
}
