<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
require_once  'validators/unique_multiple.php';
require_once  'routes/agents.php';


Route::group(['middleware' => ['web']], function () {
    Route::get('/', function () {
            if(\Auth::check()){
                return view('admin');
            }else{
                return redirect()->guest('login');
            }
        });
    Route::get("/bookings", 'Api\VReserve\BookingController@index');

    Route::get("/image/{type}/{fileName}", 'Api\ImageController@getImage');

    Route::auth();

    Route::get('/home', function(){

        return redirect("/");
    });
});


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/
Route::group(['prefix' => "templates", 'middleware' => ['web']],
    function(){
        Route::get("load/{templateName}", 'Api\ViewManageController@loadTemplate');
    }
);


Route::get('/form/{formName}', function ($formName){
    if(\View::exists('forms.'.$formName)) {

        return \View::make('forms.'.$formName);

    } else {
        return "the form ur looking for does not exist";
    }
});

Route::group(['prefix' => 'v1/api', 'middleware' => ['web']], function () {


    Route::get("/room/filter-availability-by-duration", 'Api\Hotel\HotelController@search');
    Route::post("/request/booking" , 'Api\Hotel\RoomInventoryController@requestBooking');

    Route::resource("countries", 'Api\Location\CountryController',
            ['only' => ['index', 'get']] );
    Route::resource("cities", 'Api\Location\CityController',
            ['only' => ['index', 'get']] );
    Route::resource("locations", 'Api\Location\LocationController',
        ['only' => ['index', 'get']] );

    Route::group(['middleware' => ['auth']], function(){

        Route::get("/load/resort_menu", 'Api\ViewManageController@loadResortMenu');
        Route::get("/get/ac", 'Api\ViewManageController@getAccessLevels');

        Route::get('logged-in-user', 'Auth\UserController@getAuthUser');
        Route::resource("countries", 'Api\Location\CountryController',
                ['except' => ['index', 'get']]);
        Route::resource("cities", 'Api\Location\CityController',
            ['except' => ['index', 'get']] );
        Route::resource("locations", 'Api\Location\LocationController',
            ['except' => ['index', 'get']] );

        Route::resource("facilities_and_amenities", 'Api\Hotel\FacilityAndAmenityController');
        Route::post("facilities_and_amenities/{id}", 'Api\Hotel\FacilityAndAmenityController@update');
        Route::resource("room-categories", 'Api\Hotel\RoomCategoryController');
        Route::get("room-categories/by-hotel/{hotelId}",
            'Api\Hotel\RoomCategoryController@getHotelRoomCategories');
        Route::resource("currencies", 'Api\Location\CurrencyController');
        Route::resource("hotels", 'Api\Hotel\HotelController');
        Route::post("hotels/{id}", 'Api\Hotel\HotelController@update');

        Route::resource("room-occupancies", 'Api\Hotel\RoomOccupancyController');
        Route::resource("rooms", 'Api\Hotel\RoomController');
        Route::post("rooms/{id}", 'Api\Hotel\RoomController@update');
        Route::resource("zones", 'Api\Location\ZoneController');
        Route::resource("country_zones", 'Api\Location\CountryZoneController',
                ['only' => ['store' , 'destroy']]);
        Route::resource("facilties_and_amenities_hotel", 'Api\Hotel\FacilityAndAmenityHotelController',
                ['only' => ['store' , 'destroy']]);
        Route::resource("facilties_and_amenities_room", 'Api\Hotel\FacilityAndAmenityRoomController',
                ['only' => ['store' , 'destroy']]);


        Route::resource("taxes", 'Api\Location\TaxController');
        Route::resource("tariff-taxes", 'Api\Location\TariffTaxController', ['only' => 'store', 'destroy']);
        Route::get("taxes/filter/duration", 'Api\Location\TaxController@getTaxBetweenDuration');
        Route::get("tariffs/rate/by-date", 'Api\Hotel\TariffController@getTariffRate');
        Route::post("tariffs/rate/by-date", 'Api\Hotel\TariffController@getTariffRate');

        Route::get('tariffs/rate/by-date-hotel-mealtype' , 'Api\Hotel\TariffController@getTariffRateForDurationByRoomMealPlans');
        Route::post('tariffs/rate/by-date-hotel-mealtype' , 'Api\Hotel\TariffController@getTariffRateForDurationByRoomMealPlans');

        /**
         * TARIFF (NEW)
         */

        Route::get("cache-tariffs/get-by-room-category",
                'Api\Hotel\CacheTariffController@getTariffForDuration');
        Route::get("cache-tariffs/get-by-hotel",
                'Api\Hotel\CacheTariffController@getTariffForDurationByHotel');
        Route::post("cache-tariffs/get-by-hotel",
                'Api\Hotel\CacheTariffController@getTariffForDurationByHotel');
        Route::resource("cache-tariff", 'Api\Hotel\CacheTariffController');
        Route::resource("room-availability", 'Api\Hotel\RoomAvailabilityController');

        //TARIFF NEW END

        Route::resource("hotel_transfers", 'Api\Hotel\HotelTransferController');
        Route::resource("tariffs", 'Api\Hotel\TariffController');
        Route::resource("meal_types", 'Api\Hotel\MealTypeController');
        Route::resource("meal_plans", 'Api\Hotel\MealPlanController');
        Route::resource("agents", 'Api\AgentController');
        Route::resource("attributes", 'Api\AttributeController');
        Route::resource("companies", 'Api\CompanyController');
        Route::resource("social_links", 'Api\SocialLinkController');
        Route::resource("tags", 'Api\TagController');
        Route::resource("galleries", 'Api\GalleryController', ['only' => "destroy"]);

        Route::resource("age-ranges", 'Api\Hotel\AgeRangeController');
        Route::resource("users", 'Api\User\UserController');

        Route::resource("services", 'Api\Hotel\ServiceController');
        Route::post("services/{id}", 'Api\Hotel\ServiceController@update');
        Route::resource("hotel-services", 'Api\Hotel\HotelServiceController');
        Route::resource("hotel-service-rates", 'Api\Hotel\HotelServiceRateController');

        Route::resource("policies", 'Api\Hotel\PolicyController');
        Route::post("room-inventories/set/by-duration", 'Api\Hotel\RoomInventoryController@setRoomInventory');
        Route::post("room-inventories/set/by-date", 'Api\Hotel\RoomInventoryController@setRoomInventoryForDate');
        Route::get("room-inventories/get/by-duration", 'Api\Hotel\RoomInventoryController@getRoomInventory');

        Route::get("offer-rules", 'Api\Package\OfferRuleController@index');
        Route::resource("offers", 'Api\Package\OfferController');
        Route::post("offers/{id}", 'Api\Package\OfferController@update');

        Route::resource("packages", 'Api\Package\PackageController');
        Route::post("packages/{id}", 'Api\Package\PackageController@update');
        Route::resource("package-rooms", 'Api\Package\PackageRoomController');
        Route::resource("package-services", 'Api\Package\PackageServiceController');


        //ACCESS GROUP
        Route::resource("access-groups", 'Api\User\AccessGroupController');
        Route::post("access-groups/set/user", 'Api\User\AccessGroupController@setUser');
        Route::post("access-groups/set/permission", 'Api\User\AccessGroupController@setPermission');
        Route::post("access-groups/set/access-resource", 'Api\User\AccessGroupController@setAccessResource');

        Route::post("access-groups/remove/user", 'Api\User\AccessGroupController@removeUser');
        Route::post("access-groups/remove/permission", 'Api\User\AccessGroupController@removePermission');
        Route::post("access-groups/remove/access-resource", 'Api\User\AccessGroupController@removeAccessResource');

        Route::resource("resource-accesses", 'Api\User\ResourceAccessController');
        Route::resource("resource-permissions", 'Api\User\ResourcePermissionController');


        /**
         * ENHANCEMENTS
         */
        Route::resource("enhancements", 'Api\Hotel\EnhancementController');
        Route::post("/enhancements/{id}", 'Api\Hotel\EnhancementController@update');

        Route::resource("enhancement-rates", 'Api\Hotel\EnhancementRateController');
        Route::resource("ui_favourite_links", 'Api\UiFavouriteLinkController');

    });

});

Route::get("/country/rates", 'Api\PublicApi\CountryCacheTariffController@getRates');
Route::get("/hotel/rates", 'Api\PublicApi\HotelCacheTariffController@getRates');
