<?php

return [
    'paths' => ['api/*', 'sanctum/csrf-cookie', 'login', 'logout'],

    'allowed_methods' => ['*'],

    // Put your REAL frontend origins here (NO '*')
    'allowed_origins' => [
        'http://localhost:5173',
        'http://localhost:8080',
        // add your real frontend domain if any:
        'https://booking-frontend-suka-makannn.test',
    ],

    'allowed_origins_patterns' => [],

    'allowed_headers' => ['*'],

    'exposed_headers' => [],

    'max_age' => 0,

    // Keep true if you want cookies/session auth
    'supports_credentials' => true,
];
