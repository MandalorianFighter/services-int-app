<?php

namespace App\Http\Controllers;

use App\Services\CovidStatisticService;
use Carbon\Carbon;

class CovidController extends Controller
{
    public function index(CovidStatisticService $covidStatisticService) {
        $today = Carbon::now()->toDateString();
        
        $confirmedCovidCases = $covidStatisticService->getTotalCasesByCountryAndType('ukraine', 'confirmed');
        $recoveredCovidCases = $covidStatisticService->getTotalCasesByCountryAndType('ukraine', 'recovered');
        $deadCovidCases = $covidStatisticService->getTotalCasesByCountryAndType('ukraine', 'deaths');

        return view('covid', compact('today', 'confirmedCovidCases', 'recoveredCovidCases', 'deadCovidCases'));
    }
}