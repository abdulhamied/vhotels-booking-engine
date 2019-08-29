<?php
namespace vengine\Http\Controllers\Api\Hotel;

use Illuminate\Http\Request;
class HotelController extends \vengine\Http\Controllers\Api\BaseController{
    public function __construct(
    \vengine\Repositories\Hotel\HotelRepository $repository
            ) {
        $this->repository = $repository;
    }

    public function searchHotelByID(Request $request)
    {
        $rules = [
            'hotel_id' => 'required|exists:hotels,id',
            'start_date' => 'required|date',
            'end_date' => "required|date"
        ];
        $validator = \Validator::make($request->all(), $rules);
        if($validator->fails())
        {
            return $this->response(405, 'Validation Errors', $validator->messages());
        }
        
        $limit = 10;
        $page = $request->get("page", 1);
        $data = \DB::table(
                \DB::raw("(SELECT cache_tariffs.country_id, hotel_id, currency_id, tariff_id, room_type_id , SUM(single)  AS single_total,
                    SUM(cache_tariffs.double) AS double_total, 
                SUM(twin) AS twin_total, SUM(triple) AS triple_total, SUM(quadruple) AS quadruple_total,
                SUM(pax_5) AS pax_5_total, SUM(pax_6) AS pax_6_total,  SUM(pax_7) AS pax_7_total,
                 SUM(pax_8) AS pax_8_total, SUM(pax_9) AS pax_9_total,  SUM(pax_10) AS pax_10_total
                 FROM cache_tariffs
                 INNER JOIN hotels ON hotels.id = cache_tariffs.hotel_id 
                WHERE date >= '".$request->get('start_date')."' AND date <= '".$request->get("end_date")."' 
                AND hotels.id = ".$request->get("hotel_id")." 
                GROUP BY room_type_id  
                ORDER BY SUM(cache_tariffs.double) ASC)tbl")
                )->skip(($page-1)*$limit)->take($limit)->get();
        $returnArray = [];
        foreach ($data as $each) {
            $tempObj = ['detail' => $each, 'hotel' =>  $this->repository->get($each->hotel_id) ];
            $returnArray[] = $tempObj;
        }
        return $this->success('Data', $returnArray);
    }

    public function searchCity(Request $request)
    {
        $rules = [
            'city_id' => 'required|exists:cities,id',
            'start_date' => 'required|date',
            'end_date' => "required|date"
        ];
        $validator = \Validator::make($request->all(), $rules);
        if($validator->fails())
        {
            return $this->response(405, 'Validation Errors', $validator->messages());
        }
        
        $limit = 10;
        $page = $request->get("page", 1);
        $data = \DB::table(
                \DB::raw("(SELECT cache_tariffs.country_id, hotel_id, currency_id, tariff_id, room_type_id , SUM(single)  AS single_total,
                    SUM(cache_tariffs.double) AS double_total, 
                SUM(twin) AS twin_total, SUM(triple) AS triple_total, SUM(quadruple) AS quadruple_total,
                SUM(pax_5) AS pax_5_total, SUM(pax_6) AS pax_6_total,  SUM(pax_7) AS pax_7_total,
                 SUM(pax_8) AS pax_8_total, SUM(pax_9) AS pax_9_total,  SUM(pax_10) AS pax_10_total
                 FROM cache_tariffs
                 INNER JOIN hotels ON hotels.id = cache_tariffs.hotel_id 
                WHERE date >= '".$request->get('start_date')."' AND date <= '".$request->get("end_date")."' 
                AND hotels.city_id = ".$request->get("city_id")." 
                GROUP BY hotel_id 
                ORDER BY SUM(cache_tariffs.double) ASC)tbl")
                )->skip(($page-1)*$limit)->take($limit)->get();
        $returnArray = [];
        foreach ($data as $each) {
            $tempObj = ['detail' => $each, 'hotel' =>  $this->repository->get($each->hotel_id) ];
            $returnArray[] = $tempObj;
        }
        return $this->success('Data', $returnArray);
    }

    public function searchCounty(Request $request)
    {
        $rules = [
            'country_id' => 'required|exists:countries,id',
            'start_date' => 'required|date',
            'end_date' => "required|date"
        ];
        $validator = \Validator::make($request->all(), $rules);
        if($validator->fails())
        {
            return $this->response(405, 'Validation Errors', $validator->messages());
        }
        
        $limit = 10;
        $page = $request->get("page", 1);
        $data = \DB::table(
                \DB::raw("(SELECT country_id, hotel_id, currency_id, tariff_id, room_type_id , SUM(single)  AS single_total,
                    SUM(cache_tariffs.double) AS double_total, 
                SUM(twin) AS twin_total, SUM(triple) AS triple_total, SUM(quadruple) AS quadruple_total,
                SUM(pax_5) AS pax_5_total, SUM(pax_6) AS pax_6_total,  SUM(pax_7) AS pax_7_total,
                 SUM(pax_8) AS pax_8_total, SUM(pax_9) AS pax_9_total,  SUM(pax_10) AS pax_10_total
                 FROM cache_tariffs
                WHERE date >= '".$request->get('start_date')."' AND date <= '".$request->get("end_date")."' 
                AND country_id = ".$request->get("country_id")."
                GROUP BY hotel_id
                ORDER BY SUM(cache_tariffs.double) ASC)tbl")
                )->skip(($page-1)*$limit)->take($limit)->get();
        $returnArray = [];
        foreach ($data as $each) {
            $tempObj = ['detail' => $each, 'hotel' =>  $this->repository->get($each->hotel_id) ];
            $returnArray[] = $tempObj;
        }
        return $this->success('Data', $returnArray);
    }
    public function searchHotel(Request $request)
    {
        $rules = [
            'start_date' => 'required|date',
            'end_date' => "required|date"
        ];
        $validator = \Validator::make($request->all(), $rules);
        if($validator->fails())
        {
            return $this->response(405, 'Validation Errors', $validator->messages());
        }
        
        $limit = 10;
        $page = $request->get("page", 1);
        $data = \DB::table(
                \DB::raw("(SELECT country_id, hotel_id, currency_id, tariff_id, room_type_id , SUM(single)  AS single_total,
                    SUM(cache_tariffs.double) AS double_total, 
                SUM(twin) AS twin_total, SUM(triple) AS triple_total, SUM(quadruple) AS quadruple_total,
                SUM(pax_5) AS pax_5_total, SUM(pax_6) AS pax_6_total,  SUM(pax_7) AS pax_7_total,
                 SUM(pax_8) AS pax_8_total, SUM(pax_9) AS pax_9_total,  SUM(pax_10) AS pax_10_total
                 FROM cache_tariffs
                 WHERE date >= '".$request->get('start_date')."' AND date <= '".$request->get("end_date")."' 
                GROUP BY hotel_id
                ORDER BY SUM(cache_tariffs.double) ASC)tbl")
                )->skip(($page-1)*$limit)->take($limit)->get();
        $returnArray = [];
        foreach ($data as $each) {
            
            $tempObj = ['detail' => $each, 'hotel' =>  $this->repository->get($each->hotel_id) ];

            $returnArray[] = $tempObj;
        }
        return $this->success('Data', $returnArray);
    }
    
    
}
