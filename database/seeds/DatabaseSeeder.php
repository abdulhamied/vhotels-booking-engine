<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserTableSeeder::class);
        $this->call(CountriesTableSeeder::class);

        $company = \vengine\Models\Company::create([
            'name'         => "Villa Hotels",
            'company_type' => "hotel",
            'max_users'    => 1000,
        ]);

        $user = \vengine\User::create([
            'email'      => "eday369@gmail.com",
            'name'       => "Eday",
            "company_id" => $company->id,
            "password"   => \Hash::make("test@123"),
        ]);

        $country = \vengine\Models\Country::where('name', '=', 'Maldives')->first();

        $city = \vengine\Models\City::create([
            'name'       => "Male'",
            'country_id' => $country->id,
        ]);
        $location = \vengine\Models\Location::create([
            'place'      => "Henveyru Location",
            'country_id' => $country->id,
            'city_id'    => $city->id,
        ]);

        $currency = \vengine\Models\Currency::create([
            'name'        => "USD",
            'description' => "USD",
            'symbol'      => "$",
        ]);

        $tax = \vengine\Models\Tax::create([
            'name'       => 'GST',
            'country_id' => $country->id,
            'start_date' => "2016-01-01",
            'end_date'   => "2016-12-31",
            'type'       => 'percent',
            'amount'     => 6,
            'created_by' => $user->id,
        ]);

        $contact = \vengine\Models\Contact::create([
            'addressline' => "Contact Address",
            'telephone'   => "3333333",
            'fax'         => '3333333',
            'email'       => 'info@villahotels.com',
            'created_by'  => $user->id,
            'company_id'  => $company->id,
        ]);
        
        
        $this->call(AgeRangeSeeder::class);

        $hotel = \vengine\Models\Hotel::create([
            'name'        => 'Fun Island Resort',
            'country_id'  => $country->id,
            'city_id'     => $city->id,
            'location_id' => $location->id,
            'contact_id'  => $contact->id,
            'description' => "Hotel Description",
            'star_rating' => '5',
            'company_id'  => $company->id,
            'created_by'  => $user->id,
            'infant_age_range_id' => 1,
            'child_age_range_id' => 2,
            'teen_age_range_id' => 3,
            'adult_age_range_id' => 4,
            'detail' => json_encode([
                'short_description' => "Short Description"
            ])
        ]);

        $hotelHoliday = \vengine\Models\Hotel::create([
            'name'        => 'Holiday Island Resort',
            'country_id'  => $country->id,
            'city_id'     => $city->id,
            'location_id' => $location->id,
            'contact_id'  => $contact->id,
            'description' => "Hotel Description",
            'star_rating' => '5',
            'company_id'  => $company->id,
            'created_by'  => $user->id,
            
            'infant_age_range_id' => 1,
            'child_age_range_id' => 2,
            'teen_age_range_id' => 3,
            'adult_age_range_id' => 4,
            'detail' => json_encode([
                'short_description' => "Short Description"
            ])
        ]);

        $hotelParadise = \vengine\Models\Hotel::create([
            'name'        => 'Paradise Island Resort',
            'country_id'  => $country->id,
            'city_id'     => $city->id,
            'location_id' => $location->id,
            'contact_id'  => $contact->id,
            'description' => "Hotel Description",
            'star_rating' => '5',
            'company_id'  => $company->id,
            'created_by'  => $user->id,
            'infant_age_range_id' => 1,
            'child_age_range_id' => 2,
            'teen_age_range_id' => 3,
            'adult_age_range_id' => 4,
            'detail' => json_encode([
                'short_description' => "Short Description"
            ])
        ]);

        $hotelRoyal = \vengine\Models\Hotel::create([
            'name'        => 'Royal Island Resort',
            'country_id'  => $country->id,
            'city_id'     => $city->id,
            'location_id' => $location->id,
            'contact_id'  => $contact->id,
            'description' => "Hotel Description",
            'star_rating' => '5',
            'company_id'  => $company->id,
            'created_by'  => $user->id,
            'infant_age_range_id' => 1,
            'child_age_range_id' => 2,
            'teen_age_range_id' => 3,
            'adult_age_range_id' => 4,
            'detail' => json_encode([
                'short_description' => "Short Description"
            ])
        ]);

        $hotelSun = \vengine\Models\Hotel::create([
            'name'        => 'Sun Island Resort',
            'country_id'  => $country->id,
            'city_id'     => $city->id,
            'location_id' => $location->id,
            'contact_id'  => $contact->id,
            'description' => "Hotel Description",
            'star_rating' => '5',
            'company_id'  => $company->id,
            'created_by'  => $user->id,
            'infant_age_range_id' => 1,
            'child_age_range_id' => 2,
            'teen_age_range_id' => 3,
            'adult_age_range_id' => 4,
            'detail' => json_encode([
                'short_description' => "Short Description"
            ])
        ]);

        $roomCategory = \vengine\Models\RoomCategory::create([
            'name'       => "Deluxe Room",
            'company_id' => $company->id,
            'created_by' => $user->id,
            'hotel_id'   => $hotel->id,
        ]);

        $room = \vengine\Models\Room::create([
            'room_category_id'      => $roomCategory->id,
            'hotel_id'              => $hotel->id,
            'company_id'            => $company->id,
            'code'                  => 'A123',
            'description'           => "Description is this",
            'baby_cot_availability' => true,
            'extra_bed_allowed'     => true,
            'number_of_rooms'       => 5,
            'created_by'            => $user->id,
        ]);

        $zone = \vengine\Models\Zone::create([
            'hotel_id'    => $hotel->id,
            'start'       => "2016-01-01",
            'end'         => '2016-12-30',
            'status'      => 'active',
            'name'        => 'ALL',
            'description' => 'ALL',
            'company_id'  => $company->id,
            'created_by'  => $user->id,
        ]);

//        $rule = \vengine\Models\Role::create([
        //            'name' => 'SuperUser',
        //            'slug' => 'superuser',
        //            'description' => '',
        //            'level' => 1
        //        ]);
        //
        //        $permission = \vengine\Models\Permission::create([
        //            'name' => 'Users',
        //            'route' => 'v1\api\users',
        //            'slug' => 'users',
        //            'description' => '',
        //            'model' => 'vengine\User',
        //            'read' => true,
        //            'write_update' => true,
        //            'write_new' => true,
        //        ]);
        //
        //        $rule->users()->attach($user);
        //        $rule->permissions()->attach($permission);

        $mealType = \vengine\Models\MealType::create([
            'name'       => 'BB',
            'hotel_id'   => $hotel->id,
            'created_by' => $user->id,
            'adult_rate' => "0",
        ]);
        \vengine\Models\MealTypeRateLog::create([
            'adult_rate'   => '0',
            'created_by'   => $user->id,
            'meal_type_id' => $mealType->id,
        ]);
        $mealTypeHB = \vengine\Models\MealType::create([
            'name'       => 'HB',
            'hotel_id'   => $hotel->id,
            'created_by' => $user->id,
            'adult_rate' => '10',
        ]);
        \vengine\Models\MealTypeRateLog::create([
            'adult_rate'   => '10',
            'created_by'   => $user->id,
            'meal_type_id' => $mealTypeHB->id,
        ]);

        $app = \vengine\Models\App::create([
            'name'          => 'travelmanic',
            'token'         => 'travelmanic123',
            'access_levels' => json_encode([
                'type' => 'agent',
            ]),
            'created_by'    => 1,
        ]);

        $agent = \vengine\Models\Agent::create([
            'name'        => 'agent_one',
            'markup_type' => 'fixed',
            'contact_id'  => $contact->id,
            'city_id'     => $city->id,
            'status'      => 'approved',
            'company_id'  => $company->id,
            'created_by'  => 1,
        ]);

        $agentUser = \vengine\User::create([
            'name'       => 'AgentOne',
            'email'      => 'agent@maldives.mv',
            'password'   => \Hash::make("test@123"),
            'company_id' => $company->id,
            'agent_id'   => $agent->id,
            'type'       => 'agent',
        ]);

        $attributePolicyOne = \vengine\Models\Attribute::create([
            'key'          => 'booking-policy',
            'value'        => 'booking-policy',
            'display_name' => 'Booking Policy',
            'sort_order'   => 1,
            'company_id'   => 1,
            'created_by'   => 1,
            'type'         => 'policy',
        ]);

        $attributePolicyOne = \vengine\Models\Attribute::create([
            'key'          => 'cancellation-policy',
            'value'        => 'cancellation-policy',
            'display_name' => 'Cancellation Policy',
            'sort_order'   => 1,
            'company_id'   => 1,
            'created_by'   => 1,
            'type'         => 'policy',
        ]);

        \vengine\Models\OfferRule::create([
            'name'        => 'Fixed Amount',
            'description' => '',
            'rule'        => json_encode([
                'type'   => 'fixed',
                'fields' => [
                   
                ],
            ]),
        ]);

        \vengine\Models\OfferRule::create([
            'name'        => 'Discount Amount',
            'description' => '',
            'rule'        => json_encode([
                'type'   => 'percent',
                'fields' => [
                   
                ],
            ]),
        ]);

        \vengine\Models\OfferRule::create([
            'name'        => 'Member Count',
            'description' => '',
            'rule'        => json_encode([
                'type'   => 'member_count',
                'fields' => [
                    [
                        'name'           => 'Min Member Count',
                        'type'           => 'number',
                        'rule_type'      => 'count',
                        'rule_condition' => '>',
                    ],
                ],
            ]),
        ]);

        \vengine\Models\OfferRule::create([
            'name'        => 'Total Amount',
            'description' => '',
            'rule'        => json_encode([
                'type'   => 'total_amount',
                'fields' => [
                    [
                        'name'           => 'Amount',
                        'type'           => 'number',
                        'rule_type'      => 'sum',
                        'rule_condition' => '>',
                    ],
                ],
            ]),
        ]);

        \vengine\Models\OfferRule::create([
            'name'        => 'Code',
            'description' => '',
            'rule'        => json_encode([
                'type'   => 'code',
                'fields' => [
                    [
                        'name'      => 'Code',
                        'type'      => 'text',
                        'rule_type' => 'auto-generate',
                    ],
                ],
            ]),
        ]);

    }
}
