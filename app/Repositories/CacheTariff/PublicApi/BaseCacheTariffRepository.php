<?php
namespace vengine\Repositories\CacheTariff\PublicApi;


class BaseCacheTariffRepository {
    public function getCountryZones($country)
    {
        $countryObject = \vengine\Models\Country::where("name", '=', $country)->first();
        if(empty($countryObject))
        {
            return null;
        }
        return \vengine\Models\Zone::with(['countries'])
                ->whereHas("countries", function($query) use($countryObject){
                    $query->where("id", '=', $countryObject->id);
                })->lists("id")->toArray();
    }
    
    public function getCountryID($country)
    {
        $countryObject = \vengine\Models\Country::where("name", '=', $country)->first();
        if(empty($countryObject))
        {
            return null;
        }
        return $countryObject->id;
    }
}
