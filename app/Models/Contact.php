<?php namespace vengine\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model {

    public $timestamps = false;
    
    protected $fillable = [
        'addressline', 'telephone', 'fax', 'email', 
        'website', 'created_by' , 'company_id'
    ];
    public static $rules = [
        'addressline' => "required", 
        'telephone' => "required", 
        'fax' => "", 
        'email' => "required|email", 
        'website' => "url"
    ];

	

}
