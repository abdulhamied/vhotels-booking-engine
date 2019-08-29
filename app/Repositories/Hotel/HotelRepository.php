<?php
namespace vengine\Repositories\Hotel;

use Carbon\Carbon;

class HotelRepository extends \vengine\Repositories\BaseRepository
{
    public function __construct(
        \vengine\Models\Hotel $model
    ) {
        $this->model = $model;
        $this->rules = \vengine\Models\Hotel::$rules;
        $this->with([
            'country', 'city',
            'location', 'contact',
            'company', 'facilities',
            'transfers', 'hotelPolicies',
            'image', 'gallery', 'socialLinks', 'logo', 
            'infantAgeRange', 'childAgeRange', 'teenAgeRange', 'adultAgeRange'
        ]);

        $this->linked = ['contact' => [
            'repo'  => '\vengine\Repositories\General\ContactRepository',
            'model' => '\vengine\Models\Contact',
        ]];
        $this->imageConfig = [
            [
                'type'       => 'morph',
                'typeModel'  => 'vengine\Models\Hotel',
                'morphTo'    => "vengine\Models\Gallery",
                'variable'   => "image",
                'image_type' => "cover",
                'multiple'   => false,
            ],
            [
                'type'       => 'morph',
                'typeModel'  => 'vengine\Models\Hotel',
                'morphTo'    => "vengine\Models\Gallery",
                'variable'   => "logo",
                'image_type' => "logo",
                'multiple'   => false,
            ],
            [
                'type'       => 'morph',
                'typeModel'  => 'vengine\Models\Hotel',
                'morphTo'    => "vengine\Models\Gallery",
                'variable'   => "gallery_images",
                'image_type' => "gallery",
                'multiple'   => true,
            ],
        ];
        
        $this->imageCrop = true;
        $this->imageCropSizes = [
            'width' => 1920,
            'height' => 1080
        ];
    }

    public function getCheapestTariffInHotel($hotelID, $startDate, $endDate)
    {
        $tariffList = \vengine\Models\Tariff::with('roomCategory')
            ->whereHas('roomCategory', function ($query) use ($hotelID) {
                $query->where("hotel_id", '=', $hotelID);
            })
            ->whereRaw("( DATE(start_date) BETWEEN '" . $startDate . "' AND '" . $endDate . "'
                    OR
                     DATE(end_date) BETWEEN '" . $startDate . "' AND '" . $endDate . "'
                     OR (DATE(start_date) <= '" . $startDate . "' AND DATE(end_date) >= '" . $endDate . "')
                    )")
            ->orderBy("id", 'DESC')
            ->get();

        $startDateCarbon = Carbon::createFromTimestamp(strtotime($startDate));
        $endDateCarbon   = Carbon::createFromTimestamp(strtotime($endDate));

        $days         = $startDateCarbon->diff($endDateCarbon)->days;
        $tariffPerDay = [
            'single_total' => 0,
            'double_total' => 0,
            'tariff_list'  => [],
        ];
        for ($i = 1; $i <= $days; $i++) {
            $tempDate = $startDateCarbon->addDay()->toDateString();
            $tempObj  = [
                'date'   => $tempDate,
                'tariff' => null,
            ];
            foreach ($tariffList as $tariffObj) {
                if (TariffRepository::check_in_range($tariffObj->start_date, $tariffObj->end_date, $tempDate)) {
                    if ($tempObj['tariff'] == null) {
                        $tempObj['tariff'] = $tariffObj;

                        if ($tariffObj->single != null) {
                            $tariffPerDay['single_total'] += $tariffObj->single;
                        }
                        if ($tariffObj->double != null) {
                            $tariffPerDay['double_total'] += $tariffObj->double;
                        }

                        break;
                    }
                }
            }
            $tariffPerDay['tariff_list'][] = $tempObj;
        }

        return $tariffPerDay;
    }

}
