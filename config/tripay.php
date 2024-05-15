<?php

return [
    'sandbox' => env('TRIPAY_SANDBOX_MODE', false),
    'key' => env('TRIPAY_MERCHANT_KEY', null),
    'secret' => env('TRIPAY_MERCHANT_SECRET', null),
    'merchant' => env('TRIPAY_MERCHANT', null),
];
