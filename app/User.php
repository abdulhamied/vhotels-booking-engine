<?php

namespace vengine;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'company_id', 'type'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public static $rules = [
        'name' => "required",
        'password' => "required",
        'email' => "required|email",
    ];

    public function company()
    {
        return $this->belongsTo('\vengine\Models\Company', 'company_id');
    }

    public function accessGroups()
    {
        return $this->belongsToMany(
                '\vengine\Models\AccessGroup',
                'access_group_users',
                'user_id',
                'access_group_id');
    }

}
