<?php namespace vengine\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model {

        protected $fillable = [
            'name', 'description',
            'company_id', 'hotel_id', 'created_by'
        ];
        public static $rules = [
            'name' => "required",
            'description' => "required",
            'company_id' => "",
            'hotel_id' => "required"
        ];
        
        public function hotel()
        {
            return $this->belongsTo('\vengine\Models\Hotel', 'hotel_id');
        }
	
        public function company()
        {
            return $this->belongsTo('\vengine\Models\Company', 'company_id');
        }
        
        public function image()
        {
                return $this->morphOne('\vengine\Models\Gallery', 'imageable')
                        ->where('type', 'cover')->orderBy("id", "DESC");
        }

        public function logo()
        {
            return $this->morphOne('\vengine\Models\Gallery', 'imageable')
                    ->where("type", 'logo')->orderBy("id", 'DESC');
        }

        public function gallery()
        {
                return $this->morphMany('\vengine\Models\Gallery', 'imageable')
                        ->where('type', 'gallery');
        }
	

}
