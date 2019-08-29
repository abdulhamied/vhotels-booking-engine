<?php
namespace vengine\Repositories\Hotel;
use Carbon\Carbon;

class TariffRepository extends \vengine\Repositories\BaseRepository
{
    protected $cacheTariff;
    
    public function __construct(
    \vengine\Models\Tariff $model,
    \vengine\Repositories\CacheTariff\CacheTariffBaseService $cacheTariffRepository
            ) {
                $this->cacheTariff = $cacheTariffRepository;
                $this->model = $model;
                $this->rules = \vengine\Models\Tariff::$rules;
                $this->with([
                    'zone', 'zone.countries',
                    'room', 'roomCategory', 
                    'currency', 'taxes', 'mealPlans',
                    'mealPlans.mealType']);
    }
    
    public function store($data) {
      
        $check = parent::store($data);
        if($check)
        {
            $this->cacheTariff->addNewTariff($this->storedObject);
        }
        return $check;
    }
    
    public function update($id, $data) {
        $check = parent::update($id, $data);
        if($check)
        {
            $this->cacheTariff->addNewTariff($this->storedObject);
        }
        return $check;
    }

    
    public function generateTariffRateQuery($startDate, $endDate, $hotelID)
    {
        return  "(SELECT
            room_categories.hotel_id AS hotel_id,
            room_categories.id AS room_categories_id, room_categories.name AS room_category_name ,
            meal_types.id AS meal_type_id, meal_types.name AS meal_type_name, meal_plans.id AS meal_plan_id,
            currencies.id AS currencies_id, currencies.name AS currency_name, currencies.symbol,
            tariffs . *
        FROM
            vengine.tariffs
            INNER JOIN currencies ON currencies.id = tariffs.currency_id
            INNER JOIN rooms ON rooms.room_category_id = tariffs.room_category_id
            INNER JOIN room_categories ON room_categories.id = rooms.room_category_id
            INNER JOIN meal_plans ON meal_plans.tariff_id = tariffs.id
            INNER JOIN meal_types ON meal_plans.meal_type_id = meal_types.id
        WHERE
                rooms.hotel_id = ".$hotelID." AND
                    ( DATE(start_date) BETWEEN '".$startDate."' AND '".$endDate."'
                    OR
                     DATE(end_date) BETWEEN '".$startDate."' AND '".$endDate."'
                     OR (DATE(start_date) <= '".$startDate."' AND DATE(end_date) >= '".$endDate."')
                    )
        GROUP BY meal_plans.id
        ORDER BY tariffs.id DESC)tbl";
    }
    
    public function getRoomCategoriesForHotel($hotelID)
    {
        return \vengine\Models\RoomCategory::with(['hotelMealTypes'])
            ->where("hotel_id",'=', $hotelID)->get();
    }

    public function getTariffRateForDurationByRoomMealPlan($startDate, $endDate, $hotelID)
    {
//        $minNightQuery = "
//                    AND tariffs.min_nights <= DATEDIFF('\".$endDate.\"', '\".$startDate.\"')
//                    AND tariffs.max_nights >= DATEDIFF('\".$endDate.\"', '\".$startDate.\"')";
        $sql = $this->generateTariffRateQuery($startDate, $endDate, $hotelID);

        $data = \DB::table(\DB::raw($sql))->select("*")->get();
        $roomCategories = $this->getRoomCategoriesForHotel($hotelID);

        $rateArray = [];
        
        $startDateCarbon = Carbon::createFromTimestamp(strtotime($startDate));
        $endDateCarbon = Carbon::createFromTimestamp(strtotime($endDate));


        $dateDiff = $startDateCarbon->diff($endDateCarbon)->days;
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
                if($this->check_in_range($tempStartDate, $tempEndDate, $rate['date']))
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

    public function getTariffRate($startDate, $endDate, $roomID)
    {
        $data =  \DB::table(\DB::raw(
                 "(SELECT tariffs.* FROM vengine.tariffs 
                    INNER JOIN rooms ON rooms.room_category_id = tariffs.room_category_id
                    WHERE rooms.id = ".$roomID." AND
                    ( DATE(start_date) BETWEEN '".$startDate."' AND '".$endDate."' 
                    OR 
                     DATE(end_date) BETWEEN '".$startDate."' AND '".$endDate."'
                     OR (DATE(start_date) <= '".$startDate."' AND DATE(end_date) >= '".$endDate."')
                    )
                    AND tariffs.min_nights <= DATEDIFF('".$endDate."', '".$startDate."') 
                    AND tariffs.max_nights >= DATEDIFF('".$endDate."', '".$startDate."')
                    GROUP BY tariffs.id
                    ORDER BY tariffs.id DESC)tbl"
                ))->select("*")->get();


        $rateArray = [];
        $startDateCarbon = Carbon::createFromTimestamp(strtotime($startDate));
        $endDateCarbon = Carbon::createFromTimestamp(strtotime($endDate));
        
        
        $dateDiff = $startDateCarbon->diff($endDateCarbon)->days;
        for($i =1 ; $i <= $dateDiff; $i++)
        {
            $rateArray[] = [
               'date' => $startDateCarbon->addDay()->toDateString(),
               'weekday' => $startDateCarbon->dayOfWeek,
               'tariff' => null
            ];
        }
        
        
        foreach ($data as $each) {
            $tempStartDate = $each->start_date;
            $tempEndDate = $each->end_date;
            
            foreach($rateArray as $key => $rate)
            {
                if($this->check_in_range($tempStartDate, $tempEndDate, $rate['date']))
                {
                    if($rate['tariff'] == null)
                    {
                        $data = $this->get($each->id);
                        $rateArray[$key]['tariff'] = $data;
                    }
                }
            }
            
        }
        
        return $rateArray;
    }
    
   public static function check_in_range($start_date, $end_date, $date_from_user)
    {
      // Convert to timestamp
      $start_ts = strtotime($start_date);
      $end_ts = strtotime($end_date);
      $user_ts = strtotime($date_from_user);

      // Check that user date is between start & end
      return (($user_ts >= $start_ts) && ($user_ts <= $end_ts));
    }



}