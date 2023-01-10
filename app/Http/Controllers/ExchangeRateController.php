<?php

namespace App\Http\Controllers;

use App\Services\PrivateExchangeRateService;
use Carbon\Carbon;

class ExchangeRateController extends Controller
{
    public function cash(PrivateExchangeRateService $exchangeRateService) {
        $today = Carbon::now()->toDateString();

        $currencies = $exchangeRateService->getCashExchangeRate();

        return view('privat.exchange', compact('today', 'currencies'));
    }
}