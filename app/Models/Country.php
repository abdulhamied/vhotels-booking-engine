<?php namespace vengine\Models;

use Illuminate\Database\Eloquent\Model;
use Elasticquent\ElasticquentTrait;

class Country extends Model {

    use ElasticquentTrait;
    
    protected $fillable = [
        'name', 'zone_id',
    ];
    public static $rules = [
        'name' => "required",
    ];

    public function cities()
    {
        return $this->hasMany('\vengine\Models\City')->orderBy('name', 'asc');
    }

    public function getNameAttribute()
    {
        return ucwords(strtolower($this->attributes['name']));
    }

    public function zones()
    {
        return $this->belongsToMany("\vengine\Models\Zone");
    }
}
