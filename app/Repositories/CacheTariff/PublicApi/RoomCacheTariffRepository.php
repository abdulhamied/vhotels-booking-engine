<?php
namespace vengine\Repositories\CacheTariff\PublicApi;

use Illuminate\Http\Request;
use Carbon\Carbon;

class RoomCacheTariffRepository {
    
    protected $rules =[
        'room_category_id' => "required",
        'hotel_id' => "required",
        'start_date' => "required|date",
        'end_date' => "required|date|after:start_date",
        'adult_count' => "required",
        'child_count' => "",
        'infant_count' => '',
        'room_count' => "required"
    ];
    protected $mapper = [
        '1' => 'single',
        '2' => 'double',
        '3' => 'triple',
        '4' => 'quadruple',
        '5' => 'pax_5',
        '6' => 'pax_6',
        '7' => 'pax_7',
        '8' => 'pax_8',
        '9' => 'pax_9',
        '10' => 'pax_10',
    ];
    protected $errors = [];
    public $validator = null;
    protected $isValid = true;
    
    public function __construct() {
        
    }
    /**
     * 
     * @param Request $request
     * PARAM  country,start_date,end_date,
     * adult_count,child_count,infant_count,
     * room_count
     */
    public function getLowestRates(Request $request)
    {
        $this->validator = \Validator::make($request->all(), $this->rules);
        if($this->validator->fails())
        {
            $this->isValid = false;
            return false;
        }
        
        $numberOfAdultsString = $this->mapper[$request->get("adult_count", 2)];
        $childCount = $request->get("child_count", 0);
        $infantCount = $request->get("infant_count", 0);
        $teenCount = $request->get("teen_count", 0);
        $startDate = $request->get("start_date");
        $endDate = $request->get("end_date");
        $startDateCarbon = Carbon::createFromTimestamp(strtotime($startDate))->toDateString();
        $endDateCarbon = Carbon::createFromTimestamp(strtotime($endDate))->toDateString();
        $roomCategoryID = $request->get("room_category_id");
        
        $response = \DB::select('SELECT calculate_rates_list.tariff_id, calculate_rates_list.hotel_id, calculate_rates_list.currency_id,
        calculate_rates_list.zone_id, calculate_rates_list.room_type_id, calculate_rates_list.total_days,
        calculate_rates_list.total_room, calculate_rates_list.calculated_total, 
        hotels.name as hotelName, hotels.description, 
        hotels.country_id, room_categories.name as roomName, countries.name as countryName
        FROM 
        (
        SELECT *, 
        SUM(service_charge_percent) AS service_charge_total, 
        SUM(per_person_charge_amount) as per_person_charge_total, 
        SUM(taxes_percent) AS taxes_percent_total,
        (total_room + (total_room * (SUM(service_charge_percent) /100)))
        +
        ((total_room + (total_room * (SUM(service_charge_percent) /100))) * (SUM(taxes_percent)/100) )
        +
        (SUM(per_person_charge_amount) * 6 )

         as calculated_total
        FROM (
        SELECT temp_room_tariff.*, taxes.name as tax_name, taxes.type,taxes.amount as tax_amount,
        '.$numberOfAdultsString.'_total+child_total+teen_total+infant_total+baby_cot_total+extra_bed_total as total_room,
        IF(taxes.type = "service_charge", taxes.amount, 0) AS service_charge_percent,
        IF(taxes.type = "per_person", taxes.amount, 0) AS per_person_charge_amount,
        IF(taxes.type = "percent", taxes.amount, 0) AS taxes_percent

        FROM (
        SELECT id, tariff_id, hotel_id, currency_id, zone_id, room_type_id, COUNT(*) as total_days, 
        SUM(single) as single_total, SUM(`double`) as double_total,
        SUM(twin) as twin_total, SUM(triple) as triple_total, SUM(quadruple) as quadruple_total,
        SUM(pax_5) as pax_5_total, SUM(pax_6) as pax_6_total,  SUM(pax_7) as pax_7_total,
        SUM(pax_8) as pax_8_total, SUM(pax_9) as pax_9_total, SUM(pax_10) as pax_10_total, 
        SUM(child_rate) * '.$childCount.' as child_total, SUM(teen_rate) * '.$teenCount.' as teen_total, SUM(infant_rate) * '.$infantCount.' as infant_total, 
        SUM(baby_cot_rate) * 0 as baby_cot_total, SUM(extra_bed_rate) * 0 as extra_bed_total

         FROM vengine.cache_tariffs
        WHERE DATE(date) >= "'.$startDateCarbon.'" AND DATE(date) <= "'.$endDateCarbon.'" 
            AND room_type_id = '.$roomCategoryID.' 
        GROUP BY room_type_id 
        )temp_room_tariff
        INNER JOIN tariff_taxes ON tariff_taxes.tariff_id = temp_room_tariff.tariff_id
        INNER JOIN taxes ON taxes.id = tariff_taxes.tax_id)temp_room_tariff_with_taxes
        GROUP BY room_type_id
        )calculate_rates_list
        INNER JOIN hotels ON hotels.id = calculate_rates_list.hotel_id
        INNER JOIN countries ON countries.id = hotels.country_id
        INNER JOIN room_categories ON room_categories.id = calculate_rates_list.room_type_id 
    ORDER BY calculated_total ASC    
    ');
        
        
        return $response;
        
    }
}
