<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

class WeatherController extends Controller
{
    public function getWeather()
    {
        $json = Storage::get('city.list.json');
        dd($json);
//        $response = Http::get('api.openweathermap.org/data/2.5/weather?id=30616&appid=1b8b763e48a2ef7f0bd49ab707fe3874');
//        dd($response->body());
    }
}
