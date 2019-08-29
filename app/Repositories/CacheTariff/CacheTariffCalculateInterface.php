<?php
namespace vengine\Repositories\CacheTariff;

interface CacheTariffCalculateInterface{
    public function getRoomCategoryAvailabilityStatus($hotelID, $roomTypeID, $selectedDate);
    public function getTariffForDuration($hotelID, $roomTypeID, $startDate, $endDate, $zoneID,
            $roomCount, $adult = 0, $child =0 , $infant = 0);
    public function calculateTariffTotal($cacheTariffObj, $adult, $child, $infant);
    public function getTariffForDurationByHotel($hotelID, $startDate, $endDate, $zoneID);
    public function calculateTax($tariffID, $total);
    public function getTariffForDurationForFilter($hotelID, $startDate, $endDate, $zoneID,
            $roomCount, $adult=0, $child =0, $infant=0);

    public function calculateRoomTariff($hotelID, $roomCategoryID, $startDate, $endDate, $zoneID,
    $roomCount, $adult=0, $child=0, $infant=0);
}
