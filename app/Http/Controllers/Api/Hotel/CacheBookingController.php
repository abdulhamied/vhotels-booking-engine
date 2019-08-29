<?php
namespace vengine\Http\Controllers\Api\Hotel;

use Illuminate\Http\Request;
/**
 * Description of BookingController
 *
 * @author azwad
 */
class CacheBookingController extends \vengine\Http\Controllers\Api\ResponseController {
    protected $cacheTariffRepository;

    public function __construct(\vengine\Repositories\CacheTariff\CacheTariffCalculateService $cacheTariffRepository) {
        $this->cacheTariffRepository = $cacheTariffRepository;
    }


    public function getTariffRateForDurationForRoom(Request $request)
    {
        $rules = [
          'start_date' => "required|date",
          'end_date' => "required|date",
          'room_category_id' => 'required|exists:room_categories,id',
          'hotel_id' => 'required|exists:hotels,id',
          'room_count' => "required|integer",
          'adult' => "required|integer",
          'child' => "integer",
          'infant' => "integer"
        ];

        $validator = \Validator::make($request->all(), $rules);
        if($validator->fails())
        {
            return $this->response(405, 'Validation Error', $validator->messages());
        }

        $countryZone = $this->getZoneObject($request);
//                dd($countryZone);
        $zone = 1;
        if(!empty($countryZone))
        {
            $zone = $countryZone->id;
        }

        $data = $this->cacheTariffRepository->calculateRoomTariff(
                $request->get("hotel_id"),
                $request->get("room_category_id"),
                $request->get("start_date"),
                $request->get("end_date"),
                $zone,
                $request->get("room_count"),
                $request->get("adult"),
                $request->get("child", 0),
                $request->get("infant", 0));
        return $this->success("Tariff Rates", $data);
    }


    public function getTariffRateForDuration(Request $request)
    {
        $rules = [
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'hotel_id' => 'required|exists:hotels,id',
            'room_count' => 'required|integer',
            'adult' => "required|integer",
            'child' => "integer",
            'infant' => "integer"
//            'country_id' => 'required|integer|exists:countries:id'
        ];

        $validator = \Validator::make($request->all(), $rules);
        if($validator->fails())
        {
            return $this->response(405, 'Validation Error', $validator->messages());
        }
//        dd($request->all());
        $countryZone = $this->getZoneObject($request);
//                dd($countryZone);
        $zone = 1;
        if(!empty($countryZone))
        {
            $zone = $countryZone->id;
        }
//        return $zone;
        $data = $this->cacheTariffRepository->getTariffForDurationForFilter(
                $request->get("hotel_id"),
                $request->get("start_date"),
                $request->get("end_date"),
                $zone,
                $request->get("room_count"),
                $request->get("adult"),
                $request->get("child", 0),
                $request->get("infant", 0));
        return $this->success("Tariff Rates", $data);
    }


    public function getZoneObject($request)
    {
      return \vengine\Models\Zone::with(['countries'])
              ->where("hotel_id", '=', $request->get("hotel_id"))
              ->whereHas('countries' , function($query) use($request){
                  $query->where("id", '=', $request->get("country_id"));
              })->first();
    }
}
