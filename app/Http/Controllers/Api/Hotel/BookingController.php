<?php
namespace vengine\Http\Controllers\Api\Hotel;

use Illuminate\Http\Request;
/**
 * Description of BookingController
 *
 * @author azwad
 */
class BookingController extends \vengine\Http\Controllers\Api\ResponseController {
    protected $bookingRepository;
    
    public function __construct(\vengine\Repositories\Hotel\BookingRepository $bookingRepository) {
        $this->bookingRepository = $bookingRepository;
    }
    
    
    public function getTariffRateForDuration(Request $request)
    {
        $rules = [
            'start_date' => 'required|date', 
            'end_date' => 'required|date',
            'hotel_id' => 'required|exists:hotels,id',
            'room_count' => 'required|integer'
        ];
        
        $validator = \Validator::make($request->all(), $rules);
        if($validator->fails())
        {
            return $this->response(405, 'Validation Error', $validator->messages());
        }
        $data = $this->bookingRepository->getTariffRateForDuration(
                $request->get("start_date"), $request->get("end_date"), $request->get("hotel_id"), $request->get("room_count"));
        return $this->success("Tariff Rates", $data);
    }
    
}
