<?php
namespace vengine\Repositories\Hotel;

class RoomAvailabilityRepository extends \vengine\Repositories\BaseRepository
{
    public function __construct(
    \vengine\Models\RoomAvailability $model
            ) {
                $this->model = $model;
                $this->rules = \vengine\Models\RoomAvailability::$rules;
                $this->with([
                    ]);
                
                
    }
}