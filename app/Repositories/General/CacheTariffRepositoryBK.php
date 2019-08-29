<?php
namespace vengine\Repositories\General;

use Carbon\Carbon;

class CacheTariffRepositoryBK extends \vengine\Repositories\BaseRepository
{
	protected $model;
    protected $roomCategoryRepository;
	public function __construct(
                \vengine\Models\CacheTariff $model,
                 \vengine\Repositories\Hotel\RoomCategoryRepository $roomCategoryRepository
                )
	{
		$this->model = $model;
        $this->roomCategoryRepository = $roomCategoryRepository;
	}

    public function addMealPlan($mealPlanObj)
    {
        $mealPlans = \vengine\Models\MealPlan::with(['mealType'])
                   ->where("tariff_id", '=', $mealPlanObj->tariff_id)->get();
        $objs = $this->model->where('tariff_id', '=', $mealPlanObj->tariff_id)->get();
        foreach ($objs as $obj) {
            $obj->meal_plans = json_encode($mealPlans->toArray());
            $obj->save();
            }
    }
        
	public function addNewTariff($tariffObj)
	{
            $roomCategoryObj = \vengine\Models\RoomCategory::find($tariffObj->room_category_id);
            $hotelObj = \vengine\Models\Hotel::find($roomCategoryObj->hotel_id);
//            $mealPlans = \vengine\Models\MealPlan::with(['mealType'])
//                    ->where("tariff_id", '=', $tariffObj->id)->get();
            $startDateCarbon = Carbon::createFromTimestamp(strtotime($tariffObj->start_date));
            $endDateCarbon = Carbon::createFromTimestamp(strtotime($tariffObj->end_date));
            $days = $startDateCarbon->diff($endDateCarbon)->days;
            for($i=0; $i<($days+1); $i++)
            {
                    $date = $startDateCarbon->toDateString();
                    $tariffCacheObj = $this->model
                    ->where("date", '=', $date)
                    ->where("zone_id", '=', $tariffObj->zone_id)
                    ->where('room_type_id', '=', $tariffObj->room_category_id)
                    ->first();
                    if(empty($tariffCacheObj))
                    {
                        $tariffCacheObj = new $this->model();
                        $tariffCacheObj->date = $date;
                        $tariffCacheObj->created_by = \Auth::user()->id;
                    }else{
                        $tariffCacheObj->updated_by = \Auth::user()->id;
                    }
                    $tariffCacheObj->tariff_id = $tariffObj->id;
                    $tariffCacheObj->room_type_id = $tariffObj->room_category_id;
                    $tariffCacheObj->hotel_id = $roomCategoryObj->hotel_id;
                    $tariffCacheObj->currency_id = $tariffObj->currency_id;
                    $tariffCacheObj->zone_id = $tariffObj->zone_id;
                    $tariffCacheObj->min_nights = $tariffObj->min_nights;
                    $tariffCacheObj->max_nights = $tariffObj->max_nights;
                    $tariffCacheObj->single = $tariffObj->single;
                    $tariffCacheObj->double = $tariffObj->double;
                    $tariffCacheObj->triple = $tariffObj->triple;
                    $tariffCacheObj->quadruple = $tariffObj->quadruple;
                    $tariffCacheObj->pax_5 = $tariffObj->pax_5;
                    $tariffCacheObj->pax_6 = $tariffObj->pax_6;
                    $tariffCacheObj->pax_7 = $tariffObj->pax_7;
                    $tariffCacheObj->pax_8 = $tariffObj->pax_8;
                    $tariffCacheObj->pax_9 = $tariffObj->pax_9;
                    $tariffCacheObj->pax_10 = $tariffObj->pax_10;
                    $tariffCacheObj->child_rate = $tariffObj->child_rate;
                    $tariffCacheObj->teen_rate = $tariffObj->teen_rate;
                    $tariffCacheObj->infant_rate = $tariffObj->infant_rate;
                    $tariffCacheObj->baby_cot_rate = $tariffObj->baby_cot_rate;
                    $tariffCacheObj->extra_bed_rate = $tariffObj->extra_bed_rate;
                    $tariffCacheObj->country_id = $hotelObj->country_id;
//                    $tariffCacheObj->meal_plans = json_encode($mealPlans->toArray());
                    
                    $tariffCacheObj->save();
                    $startDateCarbon->addDay();
                    
            }
	}
        
        public function getRoomCategoryAvailabilityStatus($hotelID, $roomTypeID, $selectedDate)
        {
//            $roomAvailabilityList = \vengine\Models\RoomAvailability::
//                    where("hotel_id", '=', $hotelID)
//                    ->where("room_category_id", '=', $roomTypeID)
//                    ->where("selected_date", '=', $selectedDate)
//                    ->get();
            $roomAvailabilityList = \vengine\Models\RoomCategory::
                    with(['hotelMealTypes', 'hotelMealTypes.availability' =>  function($q) use($selectedDate, $roomTypeID){
                        $q->where("selected_date", '=', $selectedDate)
                                ->where("room_category_id", '=', $roomTypeID);
                    }])->find($roomTypeID);
            return $roomAvailabilityList;
        }
        
        protected $availability = [];
        protected $roomCountAvailability = [];
        protected $occupancy_availability = [];
        protected $total = [];
        protected $dateDifferenceInDays = -1;
        protected $dailyRates = [];
        
        public function getTariffForDuration($hotelID, $roomTypeID, $startDate, $endDate , $zoneID, 
                $roomCount, $adult = 0, $child = 0, $infant = 0 )
        {
            $startDateCarbon = Carbon::createFromTimestamp(strtotime($startDate));
            $endDateCarbon = Carbon::createFromTimestamp(strtotime($endDate));
            
            $this->dateDifferenceInDays = $startDateCarbon->diff($endDateCarbon)->days;
            $data = [];
            for($i = 0; $i < $this->dateDifferenceInDays; $i++)
            {
                $date = $startDateCarbon->toDateString();
                $tariffData = $this->model->with(['currency'])->where("date",'=', $date)
                        ->where("room_type_id", '=', $roomTypeID)
                        ->where("zone_id", '=', $zoneID)
                        ->where("hotel_id", '=', $hotelID)->first();
                $tempOne = \vengine\Models\RoomInventory::where("room_category_id",'=',$roomTypeID)
                        ->where("date",'=',$date)->orderBy("id", "DESC")->first();
                $availability =  $this->getRoomCategoryAvailabilityStatus($hotelID, $roomTypeID, $date);
//                dd($availability->hotelMealTypes);
                foreach ($availability->hotelMealTypes as $eachMealType) {
                    $available = false;
                    if(empty($eachMealType->availability) || $eachMealType->availability->type == 'open')
                    {
                        $available = true;
                    }
                    if(!isset($this->availability[$roomTypeID][$eachMealType->name]))
                    {
                        $this->availability[$roomTypeID][$eachMealType->name] = $available;
                    }
                    
                    if($this->availability[$roomTypeID][$eachMealType->name] == true)
                    {
                        $this->availability[$roomTypeID][$eachMealType->name] = $available;
                    }
                }
                
                
                if(!isset($this->roomCountAvailability[$roomTypeID]))
                {
                    $this->roomCountAvailability[$roomTypeID] = null;
                }
                if(!empty($tempOne))
                {
                    if(is_null($this->roomCountAvailability[$roomTypeID]))
                    {
                        $this->roomCountAvailability[$roomTypeID] = $tempOne->room_count;
                    }else{
                        if($tempOne->room_count < $this->roomCountAvailability[$roomTypeID])
                        {
                            $this->roomCountAvailability[$roomTypeID] = $tempOne->room_count;
                        }
                    }
                }else{
                    $this->roomCountAvailability[$roomTypeID] = 0;
                }
                
                if($adult !== 0)
                {
                    $this->calculateTariffTotal($tariffData, $adult, $child, $infant);
                }
                
                $data[] = [
                    'date' => $date,
                    'tariff' => $tariffData,
                    'count' => $tempOne,
                    'room_availability' => $availability
                ];
                $startDateCarbon->addDay();
            }
            return $data;
        }
        
        
        public function calculateTariffTotal($cacheTariffObj, $adult, $child, $infant)
        {
            
//            dd($cacheTariffObj);
            $mapper = [
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
            
//            $this->dailyRates[$cacheTariffObj->date] = [];
            if(!isset($this->dailyRates[$cacheTariffObj->date]))
            {
                $this->dailyRates[$cacheTariffObj->date] = [];
            }
            if(!isset($this->dailyRates[$cacheTariffObj->date][$cacheTariffObj->room_type_id]))
            {
                $this->dailyRates[$cacheTariffObj->date][$cacheTariffObj->room_type_id] = [];
            }
            
            if(!isset($this->total[$cacheTariffObj->room_type_id]))
            {
                $this->total[$cacheTariffObj->room_type_id] = [];
            }
            
            $mealPlans = (array) $cacheTariffObj->meal_plans;
            if(!isset($this->total[$cacheTariffObj->room_type_id]['base']))
                {
             foreach ($mapper as $key => $value) {
                           $this->total[$cacheTariffObj->room_type_id]['base'][$value] = 0;
                           $this->total[$cacheTariffObj->room_type_id]['base'][$value.'.tax'] = 0;
                       }
                   }
                   
            if(!isset($this->dailyRates[$cacheTariffObj->date][$cacheTariffObj->room_type_id]['base']))
            {
                foreach ($mapper as $key => $value) {
                    $this->dailyRates[$cacheTariffObj->date][$cacheTariffObj->room_type_id]['base'][$value] = 0;
//                    $this->dailyRates[$cacheTariffObj->data][$cacheTariffObj->room_type_id]['base'][$value.'.tax'];
                }
            }
                   
                   

               foreach ($mapper as $key => $value) {    
                if($cacheTariffObj->{$value} > 0)
                {
                    $tempAmount = (
                    $cacheTariffObj->{$value} +
                    ($child * $cacheTariffObj->child_rate) +
                    ($infant * $cacheTariffObj->infant_rate)
                    );
                   $taxTemp = $this->calculateTax($cacheTariffObj->tariff_id, $tempAmount);
                   $this->total[$cacheTariffObj->room_type_id]['base'][$value] += $tempAmount;
                   $this->total[$cacheTariffObj->room_type_id]['base'][$value.'.tax'] += $taxTemp['total'];
                   
                   $this->dailyRates[$cacheTariffObj->date][$cacheTariffObj->room_type_id]['base'][$value]  += $tempAmount;
                   $this->dailyRates[$cacheTariffObj->date][$cacheTariffObj->room_type_id]['base'][$value.'.tax'] = $taxTemp;
                   
                }
               }

            foreach ($mealPlans as $mealPlan) {
//                dd((array)$mealPlan);
//                $mealPlan = (array) $mealPlan;
                if(!isset($this->total[$cacheTariffObj->room_type_id][$mealPlan->meal_type->name]))
                {
                    // dd($mealPlan);
                    $this->total[$cacheTariffObj->room_type_id][$mealPlan->meal_type->name] = 
                       [
                           'base' => 0,
                           'base.tax' => 0,
                           'meal' => 0,
                           'meal.tax' => 0
                       ];
                }
                
                // dd($cacheTariffObj->{$mapper[$adult]});
                $tempBaseAmount = (
                            $cacheTariffObj->{$mapper[$adult]} + 
                            ($child * $cacheTariffObj->child_rate) +
                            ($infant * $cacheTariffObj->infant_rate)
                         );
                $baseTax = $this->calculateTax($cacheTariffObj->tariff_id, $tempBaseAmount);
                $this->total[$cacheTariffObj->room_type_id][$mealPlan->meal_type->name]['base'] += $tempBaseAmount;
                $this->total[$cacheTariffObj->room_type_id][$mealPlan->meal_type->name]['base.tax'] += $baseTax['total'];
                        
                $tempMealAmount = (
                        ( $mealPlan->adult_rate * $adult ) +
                        ( $mealPlan->child_rate * $child ) +
                        ( $mealPlan->infant_rate * $infant ) 
                        );
                $mealTax = $this->calculateTax($cacheTariffObj->tariff_id, $tempMealAmount);
                $this->total[$cacheTariffObj->room_type_id][$mealPlan->meal_type->name]['meal'] += $tempMealAmount;
                $this->total[$cacheTariffObj->room_type_id][$mealPlan->meal_type->name]['meal.tax'] += $mealTax['total'];
                
                $this->dailyRates[$cacheTariffObj->date][$cacheTariffObj->room_type_id][$mealPlan->meal_type->name] = 
                        [
                           'base' => $tempBaseAmount,
                            'base.tax' => $baseTax,
                            'meal' => $tempMealAmount,
                            'meal.tax' => $mealTax
                        ];
                
            }     
            
//            $taxAmount = $this->calculateTax($cacheTariffObj->tariff_id);
        }
        
        
        public function getTariffForDurationByHotel($hotelID, $startDate, $endDate, $zoneID)
        {
            $roomCategories =  $this->roomCategoryRepository
                    ->with(['hotelMealTypes'])
                    ->getHotelCategories($hotelID);
            $responseData  = [];
            foreach ($roomCategories as $category) {
                $temp = $category;
                $temp['tariffs'] = $this->getTariffForDuration($hotelID, $category->id, $startDate, $endDate , $zoneID, 0, 0, 0, 0);
                $responseData[] = $temp;
            }
            return $responseData;
        }
        
        public function calculateTax($tariffID, $total)
        {
            if(!\Cache::has("tariff.".$tariffID))
            {
                $tariff = \vengine\Models\Tariff::with(['taxes'])
                    ->find($tariffID);
                \Cache::put('tariff.'.$tariffID, $tariff, 1);
            }
            $tariff = \Cache::get("tariff.".$tariffID);
            $taxObject = [
                'total' => 0,
                'type' => []
            ];
            
            foreach($tariff->taxes as $tax)
            {
                if($tax->pivot->inclusive == 0){
                    if($tax->type == 'fixed')
                    {
                        $taxObject['total'] += $tax->amount;
                        $taxObject['type'][] = [
                            'name' => $tax->name,
                            'amount' => $tax->amount
                        ];
                    }
                    else if($tax->type == 'percent')
                    {
                        $taxObject['total'] += (($tax->amount/100) * $total);
                        $taxObject['type'][] = [
                            'name' => $tax->name,
                            'amount' => (($tax->amount/100) * $total)
                        ];
                    }
                }
            }
            return $taxObject;
        }
        
        //FILTER ENTRY POINT
        //bookings/filter route
        public function getTariffForDurationForFilter($hotelID, $startDate, $endDate, $zoneID, $roomCount, $adult = 0, $child = 0, $infant = 0)
        {
            $roomCategories =  $this->roomCategoryRepository
                    ->with(['hotelMealTypes', 'rooms', 'rooms.image', 'rooms.occupancies'])
                    ->getHotelCategories($hotelID);
            $responseData  = [];
            foreach ($roomCategories as $category) {
                $temp = $category;
                $temp['tariffs'] = $this->getTariffForDuration($hotelID, $category->id, $startDate, $endDate , $zoneID
                        ,$roomCount, $adult, $child, $infant);
                $responseData[] = $temp->toArray();
                unset($category['tariffs']);
            }
            

            $transfers = \vengine\Models\HotelTransfer::
            where("start_date", "<=",  Carbon::createFromTimestamp(strtotime($startDate)))
            ->where("end_date", ">=", Carbon::createFromTimestamp(strtotime($startDate)))
            ->get();

            $transferArray = [];
            foreach ($transfers as $key => $value) {
                $transferArray[] = [
                    'type' => $value->type,
                    'name' => $value->vessel,
                    'description' => $value->description,
                    'is_default' => $value->is_default,
                    'total' => [
                        'adult' => ($adult * $value->adult_amount),
                        'child' =>  ($child * $value->child_amount),
                        'infant' => ($infant * $value->infant_amount)
                    ] 
                ];
            }

            // dd($transfer);
            // $numberOfNights = $startDateCarbon->diff($endDateCarbon)->days;
            
//            return $this->availability;
//        unset($rooms[])
            return [
                'rooms' => $roomCategories,
                'daily' => $this->dailyRates,   
                'transfer' => $transferArray,   
                'total_per_room' => $this->total, 
                'no_of_rooms_required' => $roomCount, 
                'availability' => $this->availability, 
                'count_availability' => $this->roomCountAvailability, 
                'number_of_nights' => $this->dateDifferenceInDays, 
                'data' => $responseData,

            ];
        }
}