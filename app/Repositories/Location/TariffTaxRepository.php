<?php
namespace vengine\Repositories\Location;

class TariffTaxRepository extends \vengine\Repositories\BaseRepository
{
    public function __construct(
    \vengine\Models\TariffTax $model
            ) {
        $this->model = $model;
        $this->rules = \vengine\Models\TariffTax::$rules;
        $this->with([]);
    }
    
    
}