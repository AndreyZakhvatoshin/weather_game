<?php

namespace App\Entities;

use App\Models\Options;
use Illuminate\Support\Facades\Http;

class Weather
{
    private $unit;
    private $appId;

    public function __construct()
    {
        $this->unit = Options::select('value')->where('option', 'unit')->first();
        $this->appId = env('WEATHER_KEY');
    }
    public function getCities(): array
    {
        $citiesCodes = IdGenerator::makeIdPair();
        $firstWeather = Http::get("api.openweathermap.org/data/2.5/weather?id={$citiesCodes['firstId']}&units={$this->unit['value']}&lang=ru&appid={$this->appId}")->collect();
        $secondWeather = Http::get("api.openweathermap.org/data/2.5/weather?id={$citiesCodes['secondId']}&units={$this->unit['value']}&lang=ru&appid={$this->appId}")->collect();
        return compact('firstWeather', 'secondWeather');
    }
}
