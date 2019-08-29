<?php
namespace vengine\Http\Controllers\Api\VReserve;

class BookingController extends \vengine\Http\Controllers\Api\ResponseController{
    
    public function index(\Illuminate\Http\Request $request)
    {
        $data = $request->all();
        $url = config("endpoints.vreserve.urls.bookings");
        $client = new \GuzzleHttp\Client([
            
        ]);
        $val =  implode('&', array_map(
            function ($v, $k) { return sprintf("%s=%s", $k, $v); },
            $data,
            array_keys($data)
        ));
        $requestURL = $url."&".  $val;
        $response = $client->request("GET",$requestURL, []);
        return json_decode($response->getBody()->getContents(), true);
    }
}
