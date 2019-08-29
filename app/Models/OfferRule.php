<?php

namespace vengine\Models;

use Illuminate\Database\Eloquent\Model;

class OfferRule extends Model
{
    protected $fillable = ['name', 'description', 'rule'];
    
    public static $rules = [
        'name' => "", 
        'description' => '',
        'rule' => ''
    ];
    
    public function getRuleAttribute($data)
    {
        return json_decode($data);
    }
}
