<?php

namespace App\Services;

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
     * @return array|\Illuminate\Http\JsonResponse
     */
    public function getPaymentList()
    {
        try {
            $response = Http::withHeaders([
                'Authorization' => "Bearer " . $this->key,
            ])
                ->withOptions([
                    "verify" => false,
                    "timeout" => $this->timeoutSent
                ])
                ->get($this->urlBuilder('/merchant/payment-channel'));

            return $response->json();
        } catch (\Illuminate\Http\Client\RequestException $e) {
            Log::error('HTTP Request failed', ['error' => $e->getMessage(), 'trace' => $e->getTrace()]);
            return response()->json(['error' => 'HTTP Request failed'], 500);
        } catch (\Exception $e) {
            Log::error('An error occurred', ['error' => $e->getMessage(), 'trace' => $e->getTrace()]);
            return response()->json(['error' => 'An unexpected error occurred'], 500);
        }
    }

    /**
     * Create a new transaction.
     *
     * @param float  $amount The transaction amount.
     * @param string $customerName The customer's name.
     * @param string $customerEmail The customer's email.
     * @param string $methodName The payment method name.
     * @param string $customerPhone The customer's phone number.
     * @param array  $orderItems The list of order items.
     * @param string $returnUrl The return URL after payment.
     * @return array|\Illuminate\Http\JsonResponse
     */
    public function createTransaction(
        $amount,
        $customerName,
        $customerEmail,
        $methodName,
        $customerPhone,
        $orderItems,
        $returnUrl
    ) {
        $payMethod   = $methodName;
        $merchantRef = $this->generateInvoiceId();
        $secretKey   = $this->secret;
        $apiKey      = $this->key;
        $merchantCode = $this->merchantCode;

        try {
            $data = [
                'method'         => $payMethod,
                'merchant_ref'   => $merchantRef,
                'amount'         => $amount,
                'customer_name'  => $customerName,
                'customer_email' => $customerEmail,
                'customer_phone' => $customerPhone,
                'order_items'    => $orderItems,
                'return_url'     => $returnUrl,
                'expired_time'   => (time() + (24 * 60 * 60)),
                'signature'      => $this->generateSignature($merchantCode, $merchantRef, $amount, $secretKey),
            ];

            $response = Http::withHeaders([
                'Authorization' => "Bearer " . $apiKey,
            ])
                ->withOptions([
                    "verify" => false,
                    "timeout" => $this->timeoutSent
                ])
                ->post($this->urlBuilder('/transaction/create'), $data);

            return $response->json();
        } catch (\Illuminate\Http\Client\RequestException $e) {
            Log::error('HTTP Request failed', ['error' => $e->getMessage(), 'trace' => $e->getTrace()]);
            return response()->json(['error' => 'HTTP Request failed'], 500);
        } catch (\Exception $e) {
            Log::error('An error occurred', ['error' => $e->getMessage(), 'trace' => $e->getTrace()]);
            return response()->json(['error' => 'An unexpected error occurred'], 500);
        }
    }

    /**
     * Get the details of a specific transaction.
     *
     * @param string $reference The transaction reference.
     * @return array|\Illuminate\Http\JsonResponse
     */
    public function getTransactionDetail($reference)
    {
        $payload = ['reference' => $reference];

        try {
            $response = Http::withHeaders([
                'Authorization' => "Bearer " . $this->key,
            ])
                ->withOptions([
                    "verify" => false,
                    "timeout" => $this->timeoutSent
                ])
                ->get($this->urlBuilder('/transaction/detail', $payload));

            return $response->json();
        } catch (\Illuminate\Http\Client\RequestException $e) {
            Log::error('HTTP Request failed', ['error' => $e->getMessage(), 'trace' => $e->getTrace()]);
            return response()->json(['error' => 'HTTP Request failed'], 500);
        } catch (\Exception $e) {
            Log::error('An error occurred', ['error' => $e->getMessage(), 'trace' => $e->getTrace()]);
            return response()->json(['error' => 'An unexpected error occurred'], 500);
        }
    }

    /**
     * Get the list of transactions for a specific open payment.
     *
     * @param string $uuid The UUID of the open payment.
     * @return array|\Illuminate\Http\JsonResponse
     */
    public function getOpenPaymentTransactions($uuid)
    {
        try {
            $response = Http::withHeaders([
                'Authorization' => "Bearer " . $this->key,
            ])
                ->withOptions([
                    "verify" => false,
                    "timeout" => $this->timeoutSent
                ])
                ->get($this->urlBuilder("/open-payment/{$uuid}/transactions"));

            return $response->json();
        } catch (\Illuminate\Http\Client\RequestException $e) {
            Log::error('HTTP Request failed', ['error' => $e->getMessage(), 'trace' => $e->getTrace()]);
            return response()->json(['error' => 'HTTP Request failed'], 500);
        } catch (\Exception $e) {
            Log::error('An error occurred', ['error' => $e->getMessage(), 'trace' => $e->getTrace()]);
            return response()->json(['error' => 'An unexpected error occurred'], 500);
        }
    }

    /**
     * Generate a signature for a transaction.
     *
     * @param string $merchantCode The merchant code.
     * @param string $merchantRef The merchant reference.
     * @param float $amount The transaction amount.
     * @param string $secretKey The secret key.
     * @return string The generated signature.
     */
    private function generateSignature($merchantCode, $merchantRef, $amount, $secretKey)
    {
        return hash_hmac('sha256', $merchantCode . $merchantRef . $amount, $secretKey);
    }

    /**
     * Build a URL for the API request.
     *
     * @param string $url The endpoint URL to build.
     * @param array|null $params The parameters to be appended to the URL as a query string.
     * @return string The complete API URL.
     */
    private function urlBuilder(string $url, ?array $params = null): string
    {
        $cleanUrl = trim(rtrim($url, '/'), '/');
        $queryString = $params ? '?' . http_build_query($params) : '';
        return "{$this->baseUrl}/{$cleanUrl}{$queryString}";
    }


    /**
     * Generate a unique invoice ID.
     *
     * @param string|null $prefix The prefix for the invoice ID.
     * @param int|null $randomLength The length for randomStr
     * @return string The generated invoice ID.
     */
    private function generateInvoiceId(
        string $prefix = null,
        int $randomLength = 16
    ) {
        return Str::upper($prefix ??= "INV-" . Str::random($randomLength));
    }
}
