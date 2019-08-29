<?php

namespace vengine\Http\Controllers\Api\Hotel;

use Illuminate\Http\Request;
class EnhancementController extends \vengine\Http\Controllers\Api\BaseController{
    public function __construct(\vengine\Repositories\Hotel\EnhancementRepository $repo) {
        $this->repository = $repo;
    }
    
    public function filter(Request $request){
        $rules = [
            'start_date' => "required",
            'end_date' => "required|date|after:start_date",
            'hotel_id' => "required"
        ];
        $validator = \Validator::make($request->all(), $rules);
        if($validator->fails())
        {
            return $this->response(422, 'Validation Errors', $validator->messages(), 422);
        }
        $data = $this->repository->filter(
                $request->get("hotel_id"),
                $request->get("start_date"),
                $request->get("end_date")
                );
        return $this->success("Enhancement Retrieved", $data);
    }
}
