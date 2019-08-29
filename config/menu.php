<?php
return [
    [
        'name' => "Home",
        'url' => "v1.home",
        'icon' => "fa-home",
        'access-levels' => ['*']
    ],
    [
        'name' => "Location",
        'url' => "v1.locations",
        'icon' => 'fa-globe',
        'items' => [
            [
                'name' => "Countries",
                'url' => "v1.countries"
            ],
            [
                'name' => "Cities",
                'url' => "v1.cities"
            ],
//            [
//                'name' => "Locations",
//                'url' => "v1.locations"
//            ]
        ],
        'access-levels' => ['superuser']
    ],
    [
        'name' => "Hotels",
        'url' => "v1.hotels",
        'icon' => 'fa-hotel',
        'access-levels' => ['*'],
        'items' => [
            [
                'name' => 'Manage Hotel',
                'url' => "v1.hotels",
                'access-levels' => ['superuser', 'hotel']
            ],
            [
                'name' => "Room Categories",
                'url' => 'v1.room_categories',
                'access-levels' => ['superuser']
            ],
            [
                'name' => 'Rooms',
                'url' => "v1.rooms",
                'access-levels' => ['superuser']
            ],
            [
                'name' => 'Zones',
                'url' => "v1.zones",
                'access-levels' => ['superuser']
            ],
            [
                'name' => 'Meal Types',
                'url' => "v1.meal_types",
                'access-levels' => ['superuser']
            ],
            [
                'name' => 'Transfers',
                'url' => "v1.hotel_transfers",
                'access-levels' => ['superuser']
            ],
            [
                'name' => 'Enhancements',
                'url' => 'v1.enhancements',
                'access-levels' => ['superuser']
            ]
        ]
    ],
    [
        'name' => 'Packages',
        'url' => 'v1.packages',
        'icon' => 'fa-tasks',
        'items' => [
            [
                'name' => 'Create',
                'url' => 'v1.packages_create'
            ],
            [
                'name' => 'List',
                'url' => 'v1.packages_list'
            ]
        ],
        'access-levels' => ['superuser']
    ],
    [
        'name' => 'Offers',
        'url' => 'v1.offers',
        'icon' => 'fa-adjust',
        'items' => [
            [
                'name' => 'Create',
                'url' => 'v1.offers_create'
            ],
            [
                'name' => 'List',
                'url' => 'v1.offers_list'
            ]
        ],
        'access-levels' => ['superuser']
    ],
    [
        'name' => 'Bookings',
        'url' => 'v1.bookings',
        'icon' => 'fa-calendar',
        'items' => [
            [
                'name' => 'List',
                'url' => 'v1.bookings_all'
            ],
            [
                'name' => 'Pending',
                'url' => 'v1.bookings_pending'
            ]
        ],
        'access-levels' => ['superuser']
    ],
    [
        'name' => "Settings",
        'url' => "v1.settings",
        'icon' => "fa-cog",
        'items' => [
            [
                'name' => "Age Ranges",
                'url' => 'v1.age_ranges'
            ],
            [
                'name' => "Companies",
                'url' => 'v1.companies'
            ],
            [
                'name' => "Facilities and Amenities",
                'url' => 'v1.facilities_and_amenities'
            ],
            [
                'name' => "Currency",
                'url' => 'v1.currencies'
            ],
            [
                'name' => "Tax",
                'url' => 'v1.taxes'
            ],
            [
                'name' => "Attributes",
                'url' => 'v1.attributes'
            ],
            [
                'name' => "Services",
                'url' => 'v1.services'
            ],
            
        ],
        'access-levels' => ['superuser']
    ],
    [
        'name' => "Users",
        'url' => "v1.users",
        'icon' => "fa-users",
        'items' => [
            [
                'name' => "Users",
                'url' => 'v1.users'
            ],
            [
                'name' => "Resource Groups",
                'url' => 'v1.resource_groups'
            ],
            [
                'name' => "Resources",
                'url' => 'v1.resources'
            ],
            [
                'name' => "Permissions",
                'url' => 'v1.permissions'
            ],
        ],
        'access-levels' => ['superuser']
    ]
];