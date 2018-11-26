<?php

// You can find the keys here: https://vk.com/apps?act=manage

return [
    'app_id'       => env('VK_APP_ID', null),
    'app_secret'   => env('VK_APP_SECRET', null),
    'access_token' => env('VK_ACCESS_TOKEN', null),
    'redirect_uri' => env('VK_REDIRECT_URI', null),
    'api_version'  => env('VK_API_VERSION', '5.53'),
];
