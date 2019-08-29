<?php
namespace vengine\Repositories\Hotel;

class HotelTransferRepository extends \vengine\Repositories\BaseRepository
{
    public function __construct(
    \vengine\Models\HotelTransfer $model
            ) {
                $this->model = $model;
                $this->rules = \vengine\Models\HotelTransfer::$rules;
                $this->with(['hotel', 'currency', 
                    'infantAgeRange', 'childAgeRange', 'teenAgeRange', 'adultAgeRange']);
    }
}