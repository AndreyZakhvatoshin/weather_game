<?php

namespace App\Entities;


class City
{
    private $id;
    private $name;
    private $temp;

    public function __construct($weather)
    {
        $this->id = $weather['id'];
        $this->name = $weather['name'];
        $this->temp = $weather['main']['temp'];
    }

    public function getTemp()
    {
        return floatval($this->temp);
    }

    public function getName()
    {
        return $this->name;
    }
}
