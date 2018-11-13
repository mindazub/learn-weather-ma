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

        return view('home', compact('weatherData'));
    }
}
