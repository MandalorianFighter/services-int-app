<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class PrivateExchangeRateService
{
    public function getCashExchangeRate()
    {
        $request = Http::get("https://api.privatbank.ua/p24api/pubinfo?exchange&coursid=5");

        $response = json_decode($request->getBody()->getContents());

        return $response;
    }
}