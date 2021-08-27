<?php

namespace App\Http\Controllers;

use App\Entities\City;
use App\Entities\Game;
use App\Entities\Weather;
use App\Models\Result;

class GameController extends Controller
{
    public function getWeather()
    {
        $count = count(Result::select('*')->where('result', 'success')->get());
        $weather = new Weather();
        $weatherCity = $weather->getCities();
        $firstCity = new City($weatherCity['firstWeather']);
        $secondCity = new City($weatherCity['secondWeather']);
        $game = new Game($firstCity, $secondCity);
        $game->remember();
        return view('welcome', compact('firstCity', 'secondCity', 'count'));
    }

    public function check()
    {
        $winner = \request()->session()->get('winner');
        if ($winner == \request()->input('check')) {
            $result = Result::create([
                'city_1' => \request()->input('check'),
                'city_2' => \request()->input('second'),
                'result' => 'success'
            ]);
            return redirect()->route('home');
        }
        $result = Result::create([
            'city_1' => \request()->input('check'),
            'city_2' => \request()->input('second'),
            'result' => 'fails'
        ]);
        return redirect()->route('home');
    }
}
