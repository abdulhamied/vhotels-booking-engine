<?php namespace vengine\Models;

use Illuminate\Database\Eloquent\Model;
use Elasticquent\ElasticquentTrait;

class Hotel extends Model {

    use ElasticquentTrait;
    
    protected $fillable = [
        'name', 'latitude', 'longitude',
        'country_id', 'city_id', 'location_id', 
        'contact_id', 'description', 'policies', 
        'information', 'star_rating', 'priority',
        'featured', 'active' , 'company_id', 
        'created_by', 'check_in', 'check_out',
        'distance_from_airport', 'time_from_airport', 'island_dimension',
        'infant_age_range_id', 'child_age_range_id', 'teen_age_range_id',
        'adult_age_range_id', 'detail'
    ];
    public static $rules = [
        'name' =>  "required", 
        'latitude' => "regex:/^(\-?\d+(\.\d+)?)$/",
        'longitude' => "regex:/^(\-?\d+(\.\d+)?)$/",
        'country_id' => "required", 
        'city_id' => "required", 
        'location_id' => "",
        'contact_id' => "", 
        'description' => "required", 
        'policies' => "", 
        'information' => "", 
        'star_rating' => "required|min:1|max:10", 
        'priority' => "",
        'featured' => "",
        'active' =>  "", 
        'company_id' => "",
        'infant_age_range_id' => 'required',
        'child_age_range_id' => 'required',
        'adult_age_range_id' => 'required',
        'teen_age_range_id' => ''
    ];
    
    public function setTeenAgeRangeIdAttribute($data)
    {
        if($data == '')
        {
            $this->attributes['teen_age_range_id'] = NULL;
        }
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
        
    public function country()
    {
        return $this->belongsTo('\vengine\Models\Country', "country_id");
    }
    
    public function city()
    {
        return $this->belongsTo('\vengine\Models\City', "city_id");
    }
    
    public function location()
    {
        return $this->belongsTo('\vengine\Models\Location', "location_id");
    }
    
    public function contact()
    {
        return $this->belongsTo('\vengine\Models\Contact', "contact_id");
    }
    
    public function company()
    {
        return $this->belongsTo('\vengine\Models\Company', "company_id");
    }

    public function facilities()
    {
        return $this->belongsToMany(
                    '\vengine\Models\FacilityAndAmenity',
                    'facilities_and_amenity_hotels',
                    'hotel_id',
                    'facilities_and_amenity_id'
                    );
    }
    
    public function transfers()
    {
        return $this->hasMany('\vengine\Models\HotelTransfer', "hotel_id");
    }
    
    public function mealtypes()
    {
        return $this->hasMany('\vengine\Models\MealType', "hotel_id");
    }
    
    public function socialLinks()
    {
        return $this->hasMany('\vengine\Models\SocialLink', 'hotel_id');
    }
    
    public function infantAgeRange()
    {
        return $this->belongsTo('\vengine\Models\AgeRange', "infant_age_range_id");
    }

    public function hotelPolicies()
    {
        return $this->hasMany('\vengine\Models\Policy', "hotel_id");
    }

    public function childAgeRange()
    {
        return $this->belongsTo('\vengine\Models\AgeRange', "child_age_range_id");
    }

    public function teenAgeRange()
    {
        return $this->belongsTo('\vengine\Models\AgeRange', "teen_age_range_id");
    }

    public function adultAgeRange()
    {
        return $this->belongsTo('\vengine\Models\AgeRange', "adult_age_range_id");
    }
    
    public function getDetailAttribute($data)
    {
        return json_decode($data);
    }
    
    
}
