<?php
namespace vengine\Repositories\Hotel;
use Carbon\Carbon;


class BookingRepository extends TariffRepository{
    
   
   public function getTariffRateForDurationbk($startDate, $endDate, $hotelID, 
           $roomCount)
   {
       $sql = $this->generateTariffRateQuery($startDate, $endDate, $hotelID);

         $data = \DB::table(\DB::raw($sql))->select("*")->get();
        $roomCategories = $this->getRoomCategoriesForHotel($hotelID);

        $rateArray = [];
        
        $startDateCarbon = Carbon::createFromTimestamp(strtotime($startDate));
        $endDateCarbon = Carbon::createFromTimestamp(strtotime($endDate));


        $dateDiff = $startDateCarbon->diff($endDateCarbon)->days;
        
        foreach($roomCategories as $category)
        {
            
            for($i =0 ; $i <= $dateDiff; $i++)
            {
                $roomCategoriesArray = [];
                $mealTypes = [];
    //                return $roomCategories[$j]->toArray()['hotel_meal_types'];
                    foreach($category->toArray()['hotel_meal_types'] as $mealType)
                    {
                        $mealTypes[$mealType['id']] = [
                            'id' => $mealType['id'],
    //                        'mealTypeObj' => $mealType,
                            'tariff' => null
                        ];

                    }
                    $tempOne = \vengine\Models\RoomInventory::where("room_category_id",'=',$category->id)
                            ->where("date",'=',$startDateCarbon->toDateString())->orderBy("id", "DESC")->first();

                    $roomCategoriesArray= [
                        'id' => $category->id,
                        'tariff' => null,
                        'count' => (empty($tempOne)?[]:$tempOne),
                        'meal_types' => $mealTypes
                    ];
                
                $rateArray[] = [
                    'date' => $startDateCarbon->toDateString(),
                    'weekday' => $startDateCarbon->dayOfWeek,
                    'room_category' => $roomCategoriesArray
                ];
                $startDateCarbon->addDay();
            }
            
            foreach ($data as $each) {
                
                $tempStartDate = $each->start_date;
                $tempEndDate = $each->end_date;

                foreach($rateArray as $key => $rate)
                {
                    if($this->check_in_range($tempStartDate, $tempEndDate, $rate['date']) && $dateDiff >= $each->min_nights )
                    {
                        $roomCategoryID = $each->room_categories_id;
                        $mealTypeID = $each->meal_type_id;
                        $mealPlanID = $each->meal_plan_id;
//                        var_dump($rate['room_category']['meal_types'][$mealTypeID]['tariff']);
                        if($rate['room_category']['meal_types'][$mealTypeID]['tariff'] == null)
                        {
                            $data = \vengine\Models\MealPlan::with(['mealType'])->find($mealPlanID);
    //                        $data = $this->get($each->id);
                            if($rateArray[$key]['room_category']['tariff']  === null) {
                                $tariffData = \vengine\Models\Tariff::find($data->tariff_id);
                                $rateArray[$key]['room_category']['tariff'] = $tariffData;
                            }
                            $rateArray[$key]['room_category']['meal_types'][$mealTypeID]['tariff'] = $data;
                        }
    //                    if($rate['tariff'] == null)
    //                    {
    //                        $data = $this->get($each->id);
    //                        $rateArray[$key]['tariff'] = $data;
    //                    }
                    }
                }

            }

        }
//        return [
//            'diff' => $dateDiff,
//            'start' => $startDate,
//            'end' => $endDate
//        ];
        

        return $rateArray;
   }
   
   public function getTariffRateForDuration($startDate, $endDate, $hotelID, 
           $roomCount)
   {
       $sql = $this->generateTariffRateQuery($startDate, $endDate, $hotelID);

         $data = \DB::table(\DB::raw($sql))->select("*")->get();
        $roomCategories = $this->getRoomCategoriesForHotel($hotelID);

        $rateArray = [];
        
        $startDateCarbon = Carbon::createFromTimestamp(strtotime($startDate));
        $endDateCarbon = Carbon::createFromTimestamp(strtotime($endDate));


        $dateDiff = $startDateCarbon->diff($endDateCarbon)->days;
//        return [
//            'diff' => $dateDiff,
//            'start' => $startDate,
//            'end' => $endDate
//        ];
        for($i =0 ; $i <= $dateDiff; $i++)
        {
            $roomCategoriesArray = [];
            for($j=0; $j < count($roomCategories); $j ++)
            {
                $mealTypes = [];
//                return $roomCategories[$j]->toArray()['hotel_meal_types'];
                foreach($roomCategories[$j]->toArray()['hotel_meal_types'] as $mealType)
                {
                    $mealTypes[$mealType['id']] = [
                        'id' => $mealType['id'],
//                        'mealTypeObj' => $mealType,
                        'tariff' => null
                    ];
                    
                }
                $tempOne = \vengine\Models\RoomInventory::where("room_category_id",'=',$roomCategories[$j]->id)
                        ->where("date",'=',$startDateCarbon->toDateString())->orderBy("id", "DESC")->first();
                
                $roomCategoriesArray[ $roomCategories[$j]->id] = [
                    'id' => $roomCategories[$j]->id,
                    'tariff' => null,
                    'count' => (empty($tempOne)?[]:$tempOne),
                    'meal_types' => $mealTypes
                ];
            }
            $rateArray[] = [
                'date' => $startDateCarbon->toDateString(),
                'weekday' => $startDateCarbon->dayOfWeek,
                'room_category' => $roomCategoriesArray
            ];
            $startDateCarbon->addDay();
        }

        foreach ($data as $each) {
            $tempStartDate = $each->start_date;
            $tempEndDate = $each->end_date;

            foreach($rateArray as $key => $rate)
            {
                if($this->check_in_range($tempStartDate, $tempEndDate, $rate['date']) && $dateDiff >= $each->min_nights )
                {
                    $roomCategoryID = $each->room_categories_id;
                    $mealTypeID = $each->meal_type_id;
                    $mealPlanID = $each->meal_plan_id;

                    if($rate['room_category'][$roomCategoryID]['meal_types'][$mealTypeID]['tariff'] === null)
                    {
                        $data = \vengine\Models\MealPlan::with(['mealType'])->find($mealPlanID);
//                        $data = $this->get($each->id);
                        if($rateArray[$key]['room_category'][$roomCategoryID]['tariff']  === null) {
                            $tariffData = \vengine\Models\Tariff::find($data->tariff_id);
                            $rateArray[$key]['room_category'][$roomCategoryID]['tariff'] = $tariffData;
                        }
                        $rateArray[$key]['room_category'][$roomCategoryID]['meal_types'][$mealTypeID]['tariff'] = $data;
                    }
//                    if($rate['tariff'] == null)
//                    {
//                        $data = $this->get($each->id);
//                        $rateArray[$key]['tariff'] = $data;
//                    }
                }
            }

        }


        return $rateArray;
   }
}
