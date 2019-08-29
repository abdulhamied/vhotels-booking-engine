<?php
namespace vengine\Repositories\Hotel;

class RoomOccupancyRepository extends \vengine\Repositories\BaseRepository
{
    public function __construct(
    \vengine\Models\RoomOccupancy $model
            ) {
                $this->model = $model;
                $this->rules = \vengine\Models\RoomOccupancy::$rules;
                $this->with([
                    'room'
                ]);
    }
}