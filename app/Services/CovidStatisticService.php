<?php

namespace App\Services;

use Carbon\Carbon;
use Illuminate\Support\Facades\Http;

class CovidStatisticService
{
    public function getTotalCasesByCountryAndType($country, $type)
    {
        $today = Carbon::now()->toDateString();
        
        $request = Http::get("https://api.covid19api.com/total/country/{$country}/status/{$type}?from={$today}&to={$today}");

        $response = json_decode($request->body());

        return $response[count($response) - 1];
    }
}