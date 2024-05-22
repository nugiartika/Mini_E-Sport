<?php

namespace App\Services;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

/**
 * Class PaymentService
 *
 * Service class to handle payment operations using the Tripay API.
 *
 * @package App\Services
 * @see https://tripay.co.id/developer?tab=transaction-create
 * @see https://tripay.co.id/developer?tab=transaction-signature-create
 */
class PaymentService
{
    public ?string $baseUrl;
    public ?string $key;
    public ?string $secret;
    public ?string $merchantCode;
    public int $timeoutSent;

    /**
     * PaymentService constructor.
     * Initializes the service with configurations.
     */
    public function __construct()
    {
        $sandboxMode = config('tripay.sandbox', false);

        $this->baseUrl = $sandboxMode ? 'https://tripay.co.id/api-sandbox' : 'https://tripay.co.id/api';
        $this->key = config('tripay.key', null);
        $this->secret = config('tripay.secret', null);
        $this->merchantCode = config('tripay.merchant', null);
        $this->timeoutSent = config('tripay.timeout', 60);
    }

    /**
     * Get the list of available payment methods.
     *
     * @return array|Collection
     */
    public function getPaymentList()
    {
        $path = public_path('base-payment.json');

        if (!File::exists($path)) {
            return response()->json(['error' => 'File not found.'], 404);
        }

        $json = File::get($path);

        $data = json_decode($json, true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            return response()->json(['error' => 'Invalid JSON format.'], 400);
        }

        return collect($data);
    }
}
