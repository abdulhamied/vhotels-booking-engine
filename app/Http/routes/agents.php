<?php
Route::group([
   'prefix'=> 'api/agents',
   'middleware' => ['web.token']
], function(){
    Route::get("/login", 'Api\AgentController@login');
    Route::post("/login", 'Api\AgentController@login');
    Route::get("/search/hotels", 'Api\Hotel\HotelController@searchHotel');
    Route::get("/search/hotels/by-hotel", 'Api\Hotel\HotelController@searchHotelByID');
    Route::get("/search/hotels/by-country", 'Api\Hotel\HotelController@searchCounty');
    Route::get("/search/hotels/by-city", 'Api\Hotel\HotelController@searchCity');
    Route::get("/countries", 'Api\Location\CountryController@index');
    Route::post("/enhancements/filter", 'Api\Hotel\EnhancementController@filter');
    Route::resource("/enhancements", 'Api\Hotel\EnhancementController');

    Route::get("/hotels", 'Api\Hotel\HotelController@index');
    Route::get("/packages", 'Api\Package\PackageController@index');
    Route::get("/rooms", 'Api\Hotel\RoomController@index');
    Route::get("/rooms/{id}", 'Api\Hotel\RoomController@show');
    Route::get("/hotel/{id}", 'Api\Hotel\HotelController@show');
    Route::get("/services", 'Api\Hotel\ServiceController@index');
    Route::get("/room-occupancies", 'Api\Hotel\RoomOccupancyController@index');
    Route::get("/room-availability/check", 'Api\Hotel\BookingController@getTariffRateForDuration');

    //FINAL FUNCTION FOR RATES
    //1 - HOTEL BASED FILTER
    Route::get("/bookings/filter", 'Api\Hotel\CacheBookingController@getTariffRateForDuration');

    //2 - ROOM BASED FILTER
    Route::get("/bookings/filter/by/room", 'Api\Hotel\CacheBookingController@getTariffRateForDurationForRoom');

    //3 - PACKAGE AVAILABILITY CHECK
    Route::get("/packages/filter", 'Api\Package\PackageController@filterPackage');

    Route::get("/currencies", 'Api\Location\CurrencyController@index');

    Route::get("/reserve/room", 'Api\Hotel\ReserveRoomController@makeReservation');


    Route::get("offers", 'Api\Package\OfferController@index');
    Route::get("packages", 'Api\Package\PackageController@index');

});
