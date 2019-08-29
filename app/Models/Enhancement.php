<?php namespace vengine\Models;

use Illuminate\Database\Eloquent\Model;

class Enhancement extends Model {

    protected $fillable = ['title', 'description', 'currency_id', 
        'hotel_id', 'created_by', 'updated_by'];
    public static $rules = [
        'title' => 'required',
        'description' => 'required',
        'currency_id' => 'required',
        'hotel_id' => 'required'
    ];
    
    public function rates()
    {
        return $this->hasMany('\vengine\Models\EnhancementRate', 'enhancement_id');
    }
    
    public function hotel()
    {
        return $this->belongsTo('\vengine\Models\Hotel', 'hotel_id');
    }
    
    public function currency()
    {
        return $this->belongsTo('\vengine\Models\Currency', 'currency_id');
    }
    
    public function image()
        {
                return $this->morphOne('\vengine\Models\Gallery', 'imageable')
                        ->where('type', 'cover')->orderBy("id", "DESC");
        }

}
