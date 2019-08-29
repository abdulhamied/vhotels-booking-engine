<?php
namespace vengine\Repositories\CacheTariff;

use Carbon\Carbon;

class CacheTariffBaseService extends 
\vengine\Repositories\BaseRepository
{
    protected $model;
    protected $roomCategoryRepository;
    protected $offerService;
    
    public function __construct(
    \vengine\Models\CacheTariff $model,
     \vengine\Repositories\Hotel\RoomCategoryRepository $roomCategory,
     \vengine\Repositories\CacheTariff\OfferCalculateService $offerService
            ) {
        $this->model = $model;
        $this->roomCategoryRepository = $roomCategory;
        $this->offerService = $offerService;
    }
    
    
    public function addMealPlan($mealPlanObj)
    {
        $mealPlans = \vengine\Models\MealPlan::with(['mealType'])
                ->where("tariff_id", '=', $mealPlanObj->tariff_id)
                ->get();
        $objs = $this->model->where("tariff_id", '=', $mealPlanObj->tariff_id)
                ->get();
        foreach($objs as $obj)
        {
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
    
}