<?php
namespace vengine\Repositories\Package;

class PackageRepository  extends \vengine\Repositories\BaseRepository{
    public function __construct(\vengine\Models\Package $model) {
        $this->model = $model;
        $this->rules = \vengine\Models\Package::$rules;
        $this->withParams  = ['hotel', 'company', 'rooms', 'rooms.roomCategory', 'image',  'services', 'services.service'];

        $this->imageConfig = [
                    [
                        'type' => 'morph',
                        'typeModel' => 'vengine\Models\Package',
                        'morphTo' => "vengine\Models\Gallery",
                        'variable' =>  "image",
                        'image_type' => "cover",
                        'multiple' => false
                    ]
            ];
    }

    public function filterPackage($travelStartDate, $travelEndDate,
     $adultCount = 0, $childCount=0, $infantCount=0,
     $bookingDate = null)
    {
        $bookingDate = ($bookingDate == null)?date("Y-m-d"):$bookingDate;
        $data = $this->prepareQuery()->where("travel_date_from", "<=", $travelStartDate)
        ->where("travel_date_to", ">=", $travelEndDate)
        ->where("booking_date_from", "<=" , $bookingDate)
        ->where("booking_date_to", ">=", $bookingDate)
        ->get();
        return $data;
    }

}
