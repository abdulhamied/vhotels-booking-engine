<?php
namespace vengine\Http\Controllers\Api\Hotel;

use Illuminate\Http\Request;

class TariffController extends \vengine\Http\Controllers\Api\BaseController{
    public function __construct(
        \vengine\Repositories\Hotel\TariffRepository $repository
    ) {
        $this->repository = $repository;
    }
    
    public function getTariffRate(Request $request)
    {
        $rules = [
            'start_date' => 'required|date',
            'end_date' => 'required',
            'room_id' => 'required|exists:rooms,id'
        ];
        $validator = \Validator::make($request->all(), $rules);
        if($validator->fails())
        {
            return $this->response(405, 'Validation Errors', $validator->messages(), 405);
        }
        
        $data = $this->repository->getTariffRate(
                $request->get("start_date"),
               $request->get("end_date"),
                $request->get("room_id")
                );
        
        return $this->success("List of Rates", $data);
        
    }

    public function getTariffRateForDurationByRoomMealPlans(Request $request)
    {
        $rules = [
            'start_date' => 'required|date',
            'end_date' => 'required',
            'hotel_id' => 'required|exists:hotels,id'
        ];
        $validator = \Validator::make($request->all(), $rules);
        if($validator->fails())
        {
            return $this->response(405, 'Validation Errors', $validator->messages(), 405);
        }

        $data = $this->repository->getTariffRateForDurationByRoomMealPlan(
            $request->get("start_date"),
            $request->get("end_date"),
            $request->get("hotel_id")
        );

        return $this->success("List of Rates", $data);

    }
}
