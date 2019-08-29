<?php
namespace vengine\Repositories\CacheTariff;

use Carbon\Carbon;

class CacheTariffCalculateService  extends CacheTariffBaseService{

    protected $availability = [];
    protected $roomCountAvailability, $occupancyAvailability = [];
    protected $total, $offers = [];
    protected $dateDifferenceInDays = -1;
    protected $dailyRates = [];
    protected $startDateCarbon, $endDateCarbon = null;
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



    public function calculateTariffTotal($cacheTariffObj, $adult, $child, $infant) {
        if(empty($cacheTariffObj))
            return false;
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
            foreach ($this->mapper as $value) {
              $this->total[$cacheTariffObj->room_type_id]['base']['type'] = "base";
                $this->total[$cacheTariffObj->room_type_id]['base'][$value] = 0;
                $this->total[$cacheTariffObj->room_type_id]['base'][$value.'.tax'] = 0;
                $this->total[$cacheTariffObj->room_type_id]['base'][$value.'.tax_objects'] = [];
                $this->total[$cacheTariffObj->room_type_id]['base'][$value.'.service_charge'] = 0;
            }
        }

        if(!isset($this->dailyRates[$cacheTariffObj->date][$cacheTariffObj->room_type_id]['base']))
        {
            foreach ($this->mapper as $key => $value) {
                $this->dailyRates[$cacheTariffObj->date][$cacheTariffObj->room_type_id]['base'][$value] = 0;
            }
        }

        foreach ($this->mapper as $key => $value) {
            if($cacheTariffObj->{$value} > 0)
            {
                $tempAmount = (
                $cacheTariffObj->{$value} +
                ($child * $cacheTariffObj->child_rate) +
                ($infant * $cacheTariffObj->infant_rate)
                );
               $taxTemp = $this->calculateTax($cacheTariffObj->tariff_id, $tempAmount, ($adult+$child+$infant));

               $this->total[$cacheTariffObj->room_type_id]['base'][$value] += $tempAmount;
               $this->total[$cacheTariffObj->room_type_id]['base'][$value.'.tax'] += $taxTemp['total'];
               $this->total[$cacheTariffObj->room_type_id]['base'][$value.'.service_charge'] += $taxTemp['services_amount'];
               foreach($taxTemp['type'] as $taxType)
               {
                   if(empty($this->total[$cacheTariffObj->room_type_id]['base'][$value.'.tax_objects'][$taxType['name']]))
                   {
                       $this->total[$cacheTariffObj->room_type_id]['base'][$value.'.tax_objects'][$taxType['name']] = 0;
                   }
                   $this->total[$cacheTariffObj->room_type_id]['base'][$value.'.tax_objects'][$taxType['name']] += $taxType['amount'];
               }

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
                           'type' => "mealplan",
                           'is_default' => ($mealPlan->is_default == '1')?true:false,
                           'base' => 0,
                           'base.tax' => 0,
                           'base.service_charge' => 0,
                           'base.tax_objects' => [],
                           'meal' => 0,
                           'meal.tax' => 0,
                           'meal.service_charge' => 0,
                           'meal.tax_objects' => [],
                           'offer' => 0,
                           'adult' => 0,
                           'child' => 0,
                           'infant' => 0
                       ];
                }

                // dd($cacheTariffObj->{$mapper[$adult]});
                $tempBaseAmount = (
                            $cacheTariffObj->{$this->mapper[$adult]} +
                            ($child * $cacheTariffObj->child_rate) +
                            ($infant * $cacheTariffObj->infant_rate)
                         );
                $baseTax = $this->calculateTax($cacheTariffObj->tariff_id, $tempBaseAmount, ($adult+$child+$infant));
                $this->total[$cacheTariffObj->room_type_id][$mealPlan->meal_type->name]['base'] += $tempBaseAmount;
                $this->total[$cacheTariffObj->room_type_id][$mealPlan->meal_type->name]['base.tax'] += $baseTax['total'];
                $this->total[$cacheTariffObj->room_type_id][$mealPlan->meal_type->name]['base.service_charge'] += $baseTax['services_amount'];
               foreach($baseTax['type'] as $taxType)
               {
                   if(empty($this->total[$cacheTariffObj->room_type_id][$mealPlan->meal_type->name]['base.tax_objects'][$taxType['name']]))
                   {
                       $this->total[$cacheTariffObj->room_type_id][$mealPlan->meal_type->name]['base.tax_objects'][$taxType['name']] = 0;
                   }
                   $this->total[$cacheTariffObj->room_type_id][$mealPlan->meal_type->name]['base.tax_objects'][$taxType['name']] += $taxType['amount'];
               }

                $tempMealAmount = (
                        ( $mealPlan->adult_rate * $adult ) +
                        ( $mealPlan->child_rate * $child ) +
                        ( $mealPlan->infant_rate * $infant )
                        );
                $mealTax = $this->calculateTax($cacheTariffObj->tariff_id, $tempMealAmount, 0);
                $this->total[$cacheTariffObj->room_type_id][$mealPlan->meal_type->name]['meal'] += $tempMealAmount;
                $this->total[$cacheTariffObj->room_type_id][$mealPlan->meal_type->name]['meal.tax'] += $mealTax['total'];
                 $this->total[$cacheTariffObj->room_type_id][$mealPlan->meal_type->name]['meal.service_charge'] += $mealTax['services_amount'];
               foreach($mealTax['type'] as $taxType)
               {
                   if(empty($this->total[$cacheTariffObj->room_type_id][$mealPlan->meal_type->name]['meal.tax_objects'][$taxType['name']]))
                   {
                       $this->total[$cacheTariffObj->room_type_id][$mealPlan->meal_type->name]['meal.tax_objects'][$taxType['name']] = 0;
                   }
                   $this->total[$cacheTariffObj->room_type_id][$mealPlan->meal_type->name]['meal.tax_objects'][$taxType['name']] += $taxType['amount'];
               }
                $this->total[$cacheTariffObj->room_type_id][$mealPlan->meal_type->name]['offer'] += $this->offerService->calculateOffer($cacheTariffObj->hotel_id, $cacheTariffObj->date, ($adult+$child), $tempMealAmount+$tempBaseAmount );

                $this->total[$cacheTariffObj->room_type_id][$mealPlan->meal_type->name]['adult'] += ($cacheTariffObj->{$this->mapper[$adult]} + ($mealPlan->adult_rate * $adult));
                $this->total[$cacheTariffObj->room_type_id][$mealPlan->meal_type->name]['child'] += (($cacheTariffObj->child_rate * $child)+ ($mealPlan->child_rate * $child));
                $this->total[$cacheTariffObj->room_type_id][$mealPlan->meal_type->name]['infant'] += (($cacheTariffObj->infant_rate * $infant)+ ($mealPlan->infant_rate * $infant));

                $this->dailyRates[$cacheTariffObj->date][$cacheTariffObj->room_type_id][$mealPlan->meal_type->name] =
                        [
                           'base' => $tempBaseAmount,
                            'base.tax' => $baseTax,
                            'meal' => $tempMealAmount,
                            'meal.tax' => $mealTax
                        ];

            }
    }



    public function getTariffForDuration($hotelID, $roomTypeID, $startDate, $endDate, $zoneID, $roomCount, $adult = 0, $child = 0, $infant = 0) {
        $startDateCarbon = $this->startDateCarbon = Carbon::createFromTimestamp(strtotime($startDate));
        $this->endDateCarbon = Carbon::createFromTimestamp(strtotime($endDate));
        $this->dateDifferenceInDays = $this->startDateCarbon->diff($this->endDateCarbon)->days;
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

    public function getTariffForDurationByHotel($hotelID, $startDate, $endDate, $zoneID) {
        $roomCategories =  $this->roomCategoryRepository->with(['hotelMealTypes'])->getHotelCategories($hotelID);
        $responseData  = [];
        foreach ($roomCategories as $category) {
            $temp = $category;
            $temp['tariffs'] = $this->getTariffForDuration($hotelID, $category->id, $startDate, $endDate , $zoneID, 0, 0, 0, 0);
            $responseData[] = $temp;
        }
        return $responseData;
    }

    public function calculateOccupancy($roomID, $occupanyArray, $adult = 0, $child =0 , $infant =0)
    {
//        dd($occupancyObj);
        $option = false;
        $totalOccupancy = $adult+$child+$infant;
        foreach ($occupanyArray as $occupancy) {
            if(!empty($occupancy->person_occupancy) || $occupancy->person_occupancy > 0)
            {
                $option =  ($occupancy->person_occupancy >= $totalOccupancy);
            }
            else if($occupancy->adult_occupancy >= $adult
                    && $occupancy->child_occupancy >= $child
                    && $occupancy->infant_occupancy >= $infant)
            {
                $option = true;
            }
        }
        $this->occupancyAvailability[$roomID] = $option;
    }

    /**
     *
     * ENTRY POINT from controller
     *
     * @param type $hotelID
     * @param type $startDate
     * @param type $endDate
     * @param type $zoneID
     * @param type $roomCount
     * @param type $adult
     * @param type $child
     * @param type $infant
     * @return type
     */
    public function getTariffForDurationForFilter($hotelID, $startDate, $endDate, $zoneID, $roomCount, $adult = 0, $child = 0, $infant = 0) {
        $roomCategories = $this->roomCategoryRepository->with(['hotelMealTypes', 'rooms', 'rooms.image', 'rooms.occupancies'])
                    ->getHotelCategories($hotelID);
        $responseData = [];
        foreach ($roomCategories as $category) {
            $this->calculateOccupancy($category->id, $category->rooms[0]->occupancies, $adult, $child, $infant);
            $temp = $category;
            $temp['tariffs'] = $this->getTariffForDuration($hotelID, $category->id, $startDate, $endDate , $zoneID
                    ,$roomCount, $adult, $child, $infant);
            $responseData[] = $temp->toArray();
            unset($category['tariffs']);
        }

        $transfers = \vengine\Models\HotelTransfer::
            where("start_date", "<=",  Carbon::createFromTimestamp(strtotime($startDate)))
            ->where("end_date", ">=", Carbon::createFromTimestamp(strtotime($startDate)))
            ->where("hotel_id", '=', $hotelID)->get();
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

        return [
            'occupancies' => $this->occupancyAvailability,
            'rooms' => $roomCategories,
            'daily' => $this->dailyRates,
            'transfer' => $transferArray,
            'total_per_room' => $this->total,
            'no_of_rooms_required' => $roomCount,
            'availability' => $this->availability,
            'count_availability' => $this->roomCountAvailability,
            'number_of_nights' => $this->dateDifferenceInDays,
//            'data' => $responseData,

        ];

    }


    /**
    *  ENTRY POINT from controller from room filter
    */
    public function calculateRoomTariff($hotelID, $roomCategoryID, $startDate, $endDate, $zoneID,
    $roomCount, $adult=0, $child=0, $infant=0)
    {
          $category = $this->roomCategoryRepository->with(['hotelMealTypes', 'rooms', 'rooms.image', 'rooms.occupancies'])
            ->get($roomCategoryID);
          $this->calculateOccupancy($category->id, $category->rooms[0]->occupancies, $adult, $child, $infant);
          $temp = $category;
          $temp['tariffs'] = $this->getTariffForDuration($hotelID, $category->id, $startDate, $endDate , $zoneID
                  ,$roomCount, $adult, $child, $infant);
          $responseData = $temp->toArray();
          unset($category['tariffs']);


          $transfers = \vengine\Models\HotelTransfer::
              where("start_date", "<=",  Carbon::createFromTimestamp(strtotime($startDate)))
              ->where("end_date", ">=", Carbon::createFromTimestamp(strtotime($startDate)))
              ->where("hotel_id", '=', $hotelID)->get();
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

          return [
              'occupancies' => $this->occupancyAvailability,
              'rooms' => $category,
              'daily' => $this->dailyRates,
              'transfer' => $transferArray,
              'total_per_room' => $this->total,
              'no_of_rooms_required' => $roomCount,
              'availability' => $this->availability,
              'count_availability' => $this->roomCountAvailability,
              'number_of_nights' => $this->dateDifferenceInDays,
          ];
    }


    public function getRoomCategoryAvailabilityStatus($hotelID, $roomTypeID, $selectedDate) {
        return RoomCategoryAvailabilityService::getRoomCategoryAvailabilityStatus($hotelID, $roomTypeID, $selectedDate);
    }

    public function calculateTax($tariffID, $total, $peopleCount) {
        return TaxCalculateService::calculateTax($tariffID, $total, $peopleCount);
    }

}
