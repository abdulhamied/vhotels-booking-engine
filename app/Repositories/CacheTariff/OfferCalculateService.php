<?php

namespace vengine\Repositories\CacheTariff;

class OfferCalculateService {
    protected $offerList = [];
    public function calculateOffer($hotelID, $date, $numberOfPeople, $total,  $roomCategoryID =null, $code = null )
    {
        $query = \vengine\Models\Offer::where('hotel_id', '=', $hotelID)
                ->where("travel_date_from", "<=", $date)
                ->where("travel_date_to", ">=", $date);
        if(!is_null($roomCategoryID))
        {
            $query->where("room_category_id", '=', $roomCategoryID);
        }
        $this->offerList = $query->get();
        return $this->getCheapestOfferForTheDay($total);
    }
    
    public function getCheapestOfferForTheDay($total)
    {
        $offerAmount = null;
        foreach ($this->offerList as $offer) {
            if(is_null($offerAmount))
            {
                if($offer->discount_type ==  'fixed')
                {
                    $offerAmount = $offer->discount_value;
                }
                else if($offer->discount_type == 'percent')
                {
                    $offerAmount = ($offer->discount_value/100) * $total;
                }
            }else{
                $tempAmount = 0;
                if($offer->discount_type ==  'fixed')
                {
                    $tempAmount = $offer->discount_value;
                }
                else if($offer->discount_type == 'percent')
                {
                    $tempAmount = ($offer->discount_value/100) * $total;
                }
                
                if($tempAmount >= $offerAmount)
                {
                    $offerAmount = $tempAmount;
                }
            }
        }
        return $offerAmount;
    }
}
