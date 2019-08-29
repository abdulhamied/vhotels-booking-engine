<?php namespace vengine\Models;

use Illuminate\Database\Eloquent\Model;

class RoomInventoryChange extends Model {

        protected $fillable = [
            'room_inventory_id', 'previous_count', 'current_count', 'created_by'
        ];
        public static $rules = [
            'room_inventory_id' => '',
            'previous_count' => '',
            'current_count' => '',
            'created_by' => ''
        ];


}
