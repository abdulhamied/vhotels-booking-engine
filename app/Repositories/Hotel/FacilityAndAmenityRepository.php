<?php
namespace vengine\Repositories\Hotel;

class FacilityAndAmenityRepository extends \vengine\Repositories\BaseRepository
{
    public function __construct(
        \vengine\Models\FacilityAndAmenity $model
            ) {
                $this->model = $model;
                $this->rules = \vengine\Models\FacilityAndAmenity::$rules;
                $this->with(['rooms', 'hotels',  'company']);
                $this->imageConfig = [
                  [
                      'type' => 'table',
                      'variable' => 'icon',
                      'image_type' =>'icon',
                      'multiple' => false
                  ]  
                ];
    }
}