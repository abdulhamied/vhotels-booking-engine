<?php namespace vengine\Models;

use Illuminate\Database\Eloquent\Model;

class Package extends Model {

        protected $fillable = [
            'name', 'description', 'type',
            'company_id', 'hotel_id',
            'booking_date_from', 'booking_date_to',
            'travel_date_from', 'travel_date_to',
            'adult_occupancy_from', 'adult_occupancy_to',
            'child_occupancy_from', 'child_occupancy_to',
            'teen_occupancy_from', 'teen_occupancy_to',
            'infant_occupancy_from', 'infant_occupancy_to', 'total',
            'created_by',  'terms_and_conditions', 'offer_type'
        ];
        public static $rules = [
            'name' => "required",
            'type' => "required",
            'description' => "required",
            'company_id' => "",
            'hotel_id' => "required",
            'booking_date_from' => 'required|date',
            'booking_date_to' => 'required|date|after:booking_date_from',
            'travel_date_from' => 'required|date',
            'travel_date_to' => 'required|date|after:travel_date_from',
            'offer_type' => "required",
        ];

        public function hotel()
        {
            return $this->belongsTo('\vengine\Models\Hotel', 'hotel_id');
        }

        public function company()
        {
            return $this->belongsTo('\vengine\Models\Company', 'company_id');
        }

        public function rooms()
        {
            return $this->hasMany('\vengine\Models\PackageRoom', 'package_id');
        }

        public function services()
        {
            return $this->hasMany('\vengine\Models\PackageService', 'package_id');
        }

        public function image()
        {
            return $this->morphOne('\vengine\Models\Gallery', 'imageable')
                    ->where('type', 'cover')->orderBy("id", "DESC");
        }

        public function getTotalAttribute($data)
        {
          return $data;
            // return number_format($data, 2);
        }

}
