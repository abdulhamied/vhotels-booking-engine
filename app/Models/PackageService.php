<?php namespace vengine\Models;

use Illuminate\Database\Eloquent\Model;

class PackageService extends Model {

        protected $fillable = [
            'package_id','service_id',
             'created_by'
        ];
        public static $rules = [
            'package_id' => "required",
            'service_id' => "required"
        ];
        
        public function package()
        {
            return $this->belongsTo('\vengine\Models\Package', 'package_id');
        }
	
        public function service()
        {
            return $this->belongsTo('\vengine\Models\Service', 'service_id');
        }
	

}
