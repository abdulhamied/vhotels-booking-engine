<?php
namespace vengine\Http\Controllers\Api\Hotel;


use Illuminate\Http\Request;
class ReserveRoomController extends \vengine\Http\Controllers\Api\ResponseController{
    protected $reserveRoomService;
    public function __construct(\vengine\Repositories\CacheTariff\ReserveRoomService $reserveRoomService) {
        $this->reserveRoomService = $reserveRoomService;
    }
    
    public function makeReservation(Request $request)
    {
        $rules = [
            'room_category_id' => 'required',
            'meal_plan_id' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'number_of_rooms' => 'required|integer'
        ];
        $validator = \Validator::make($request->all(), $rules);
        if($validator->fails())
        {
            return $this->response(405, 'Validation Errors', $validator->messages());
        }
        
        return $data = $this->reserveRoomService->deductRoomCount(
                $request->get("room_category_id"), $request->get("meal_plan_id"), $request->get("number_of_rooms"), $request->get("start_date"), $request->get('end_date'));
        
    }
}
