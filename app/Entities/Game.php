<?php

namespace App\Entities;

use App\Models\Result;

class Game
{
    private $firstCity;
    private $secondCity;
    private $maxTemp;

    public function __construct(City $firstCity, City $secondCity)
    {
        $this->firstCity = $firstCity;
        $this->secondCity = $secondCity;
        $this->maxTemp = $firstCity->getTemp() < $secondCity->getTemp() ? $secondCity->getTemp() : $firstCity->getTemp();
    }

    public function chekTemp($temp)
    {
        if ($temp === $this->maxTemp) {
            $result = Result::create([
                'city_1' => $this->firstCity->getName(),
                'city_2' => $this->secondCity->getName(),
                'result' => 'success'
            ]);
            return true;
        }
        $result = Result::create([
            'city_1' => $this->firstCity->getName(),
            'city_2' => $this->secondCity->getName(),
            'result' => 'faild'
        ]);
        return false;
    }
}
