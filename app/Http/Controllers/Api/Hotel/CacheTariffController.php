<?php
namespace vengine\Http\Controllers\Api\Hotel;

use Illuminate\Http\Request;
/**
 * Description of CacheTariffController
 *
 * @author aliaz
 */
class CacheTariffController extends \vengine\Http\Controllers\Api\BaseController {
    
    public function __construct(
    \vengine\Repositories\CacheTariff\CacheTariffCalculateService $repository
            ) {
        $this->repository = $repository;
    }
    
    
    
    public function getTariffForDuration(Request $request)
    {
        $rules = [
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'hotel_id' => 'required',
            'room_category_id' => "required",
            'zone_id' => "required"
        ];
        
        $validator = \Validator::make($request->all(), $rules);
        if($validator->fails())
        {
            return $this->response(405, 'Validation Errors', $validator->messages(), 405);
        }
        
        $data = $this->repository->getTariffForDuration(
                $request->get("hotel_id"),
                $request->get("room_category_id"),
                $request->get("start_date"),
                $request->get("end_date"),
                $request->get("zone_id")
        );
        return $this->success("Tariff Retrieved", $data);
        
    }
    
    public function getTariffForDurationByHotel(Request $request)
    {
        $rules = [
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'hotel_id' => 'required',
            'zone_id' => "required"
        ];
        $validator = \Validator::make($request->all(), $rules);
        if($validator->fails())
        {
            return $this->response(405, 'Validation Errors', $validator->messages(), 405);
        }
        
        $data = $this->repository->getTariffForDurationByHotel(
                $request->get("hotel_id"),
                $request->get("start_date"),
                $request->get("end_date"),
                $request->get("zone_id")
                );
        return $this->success("Tariff Data Retrieved By Room Category", $data);
    }
}
