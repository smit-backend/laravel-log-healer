<?php

return [
    'enabled' => env('LARAVEL_LOG_HEALER_ENABLED', true),
    'timeout' => env('LARAVEL_LOG_HEALER_TIMEOUT', 30),
    'log_channel' => env('LARAVEL_LOG_HEALER_LOG', 'stack'),
];
