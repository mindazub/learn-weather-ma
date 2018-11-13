<?php

namespace App\Http\Controllers;

use App\Services\WeatherService;
use Illuminate\View\View;

class HomeController extends Controller
{
    private $weatherService;

    public function __construct(WeatherService $weatherService)
    {
        $this->weatherService = $weatherService;
    }

    public function index(): View
    {
        $weatherData = $this->weatherService->getCurrent();

//        dd($weatherData);
//        $windSide = $weatherData->wind->deg = $this->weatherService->getDirectionByDegrees($weatherData->wind->deg);
//        $windSide = $this->weatherService->getDirectionByDegrees($weatherData->wind->deg);

//        $windSide = array_get((array)$weatherData->wind, 'deg');
        $weatherData->wind->deg = array_get((array)$weatherData->wind, 'deg');
        $weatherData->wind->degHuman = $this->weatherService->getDirectionByDegrees(
            array_get((array)$weatherData->wind, 'deg')
        );


        return view('home', compact('weatherData'));
    }
}
