<?php
namespace vengine\Repositories\Hotel;

class HotelServiceRepository extends \vengine\Repositories\BaseRepository
{
    public function __construct(
    \vengine\Models\HotelService $model
            ) {
                $this->model = $model;
                $this->rules = \vengine\Models\HotelService::$rules;
                $this->with(['hotel', 'company', 'service']);
    }
}