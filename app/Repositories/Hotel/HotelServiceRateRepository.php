<?php
namespace vengine\Repositories\Hotel;

class HotelServiceRateRepository extends \vengine\Repositories\BaseRepository
{
    public function __construct(
    \vengine\Models\HotelServiceRate $model
            ) {
                $this->model = $model;
                $this->rules = \vengine\Models\HotelServiceRate::$rules;
                $this->with(['hotel', 'company', 'hotelService']);
    }
}