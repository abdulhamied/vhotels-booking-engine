<?php

namespace vengine\Models;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    protected $fillable = [
        'offer_rule_id', 'title', 'description',
        'booking_date_from', 'booking_date_to',
        'travel_date_from', 'travel_date_to',
        'data', 'hotel_id', 'room_category_id', 'created_by',
        'discount_type', 'discount_value', 'offer_type'
    ];
    public static $rules = [
        'title' => 'required',
        'description' => 'required',
        'booking_date_from' => 'required|date',
        'booking_date_to' => 'required|date|after:booking_date_from',
        'travel_date_from' => 'required|date',
        'travel_date_to' => 'required|date|after:travel_date_from',
        'data' => 'required',
        'hotel_id' => "required",
        'room_category_id' => "",
        'discount_type' => "required|in:fixed,percent",
        'discount_value' => "required",
        'offer_type' => "required"
    ];

    public function hotel()
    {
        return $this->belongsTo('\vengine\Models\Hotel', 'hotel_id');
    }

    public function roomCategory()
    {
        return $this->belongsTo('\vengine\Models\RoomCategory', 'room_category_id');
    }
    public function getDataAttribute($data)
    {
        return json_decode($data);
    }

    public function image()
    {
        return $this->morphOne('\vengine\Models\Gallery', 'imageable')
                ->where('type', 'cover')->orderBy("id", "DESC");
    }
}
