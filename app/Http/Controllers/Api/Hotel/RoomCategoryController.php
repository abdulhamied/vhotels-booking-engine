<?php
namespace vengine\Http\Controllers\Api\Hotel;

class RoomCategoryController extends \vengine\Http\Controllers\Api\BaseController{
    public function __construct(
    \vengine\Repositories\Hotel\RoomCategoryRepository $repository
            ) {
        $this->repository = $repository;
    }

    public function getHotelRoomCategories($hotelID)
    {
        $roomCategoryList = $this->repository->getHotelCategories($hotelID);
        return $this->success('Room Category List', $roomCategoryList);
    }
}
