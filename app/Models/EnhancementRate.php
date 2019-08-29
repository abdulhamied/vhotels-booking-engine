<?php namespace vengine\Models;

use Illuminate\Database\Eloquent\Model;

class EnhancementRate extends Model {

    protected $fillable = [
        'enhancement_id', 'start', 'end', 'type', 'rate',
        'stock', 'stock_sold',
        'created_by', 'updated_by'
    ];
    public static $rules = [
        'enhancement_id' => 'required',
        'start' => 'required|date',
        'end' => 'required|date|after:start',
        'type' => 'required|in:per_person,per_day',
        'rate' => 'required',
        'stock' => 'required',
    ];
    
    public function enhancement()
    {
        return $this->belongsTo('\vengine\Models\Enhancement', "enhancement_id");
    }
}
