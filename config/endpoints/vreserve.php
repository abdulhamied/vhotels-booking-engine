<?php
$rootURL = env("VRESERVE_ROOT_URL");
return [
    'urls' => [
        'bookings' => $rootURL.'/v1/api/web/bookings?token=vreserve@123&paginate=true'
    ]
];