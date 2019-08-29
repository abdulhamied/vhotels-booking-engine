<?php namespace vengine\Models;

use Illuminate\Database\Eloquent\Model;

class AgeRange extends Model {

        protected $fillable = [
            'name',
            'type', 'start', 'end', 'company_id',
            'created_by', 'updated_by'
        ];
        public static $rules = [
            'name' => 'required',
            'type' => "required|in:adult,teen,child,infant",
            'start' => "required|integer",
            'end' => "required|required_with:start|integer|greater_than_field:start",
            'company_id' => ""
        ];
        
        public function company()
        {
            return $this->belongsTo('\vengine\Models\Company', 'company_id');
        }

}
