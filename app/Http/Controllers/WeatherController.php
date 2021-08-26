<?php

namespace App\Http\Controllers;

use App\Entities\City;
use App\Entities\Game;
use App\Entities\IdGenerator;
use App\Models\Result;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

class WeatherController extends Controller
{
    public function getWeather()
    {
        $count = Result::select('*')->get();
        $units='metric'; //imperial
        $id = IdGenerator::makeIdPair();
        $firstWeather = Http::get("api.openweathermap.org/data/2.5/weather?id={$id['firstId']}&units={$units}&lang=ru&appid=1b8b763e48a2ef7f0bd49ab707fe3874")->collect();
        $secondWeather = Http::get("api.openweathermap.org/data/2.5/weather?id={$id['secondId']}&units={$units}&lang=ru&appid=1b8b763e48a2ef7f0bd49ab707fe3874")->collect();
        $firstCity = new City($firstWeather->all());
        $secondCity = new City($secondWeather->all());
        $game = new Game($firstCity, $secondCity);
        return view('welcome', compact('firstCity', 'secondCity'));
    }
}
