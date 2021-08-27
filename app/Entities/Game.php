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
        $this->maxTemp = $firstCity->getTemp() < $secondCity->getTemp() ? $secondCity->getName() : $firstCity->getName();
    }

    public function remember()
    {
        request()->session()->put('winner', $this->maxTemp);
        $lowTemp = $this->maxTemp !== $this->firstCity->getName() ? $this->firstCity->getName() : $this->secondCity->getName();
        request()->session()->put('looser', $lowTemp);
    }
}
