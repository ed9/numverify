<?php

declare(strict_types=1);

namespace Ed90\Services\NumVerify;

use Illuminate\Support\Facades\Http;

class NumVerify
{
    protected string $apiKey;

    public function __construct()
    {
        $this->apiKey = config('numverify.api_key');
    }

    public function verify(string $number, ?string $countryCode = null): array
    {
        $response = Http::get(config('numverify.api_validation_endpoint'), [
            'access_key' => $this->apiKey,
            'number' => $number,
            'country_code' => $countryCode,
            'format' => 1,
        ]);

        return $response->json();
    }
}
