<?php namespace vengine\Models;

use Illuminate\Database\Eloquent\Model;

class RoomInventory extends Model {
        use \Mpociot\Versionable\VersionableTrait;
        protected $fillable = [
            'hotel_id','room_category_id','date',
            'room_count', 'room_count_booked', 'room_count_blocked',
            'created_by', 'updated_by'
        ];
        public static $rules = [
            'hotel_id' => 'required',
            'room_category_id' => 'required',
            'date' => 'required|date',
            'room_count' => '',
            'room_count_booked' => '',
            'room_count_blocked' => ''
        ];


}
