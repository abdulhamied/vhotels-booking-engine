<?php namespace vengine\Models;

use Illuminate\Database\Eloquent\Model;

class PackageRoom extends Model {

        protected $fillable = [
            'package_id','room_category_id',
             'created_by'
        ];
        public static $rules = [
            'package_id' => "required",
            'room_category_id' => "required"
        ];
        
        public function package()
        {
            return $this->belongsTo('\vengine\Models\Package', 'package_id');
        }
	
        public function roomCategory()
        {
            return $this->belongsTo('\vengine\Models\RoomCategory', 'room_category_id');
        }
	

}
