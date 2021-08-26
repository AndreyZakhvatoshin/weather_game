<?php

namespace App\Entities;

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Storage;

class IdGenerator
{
    private static function getId()
    {
        $file = Storage::get('id.json');
        $jsonId = json_decode($file);
        return Arr::random($jsonId);
    }

    public static function makeIdPair(): array
    {
        $firstId = self::getId();
        $secondId = self::getId();
        if ($firstId === $secondId) {
            self::makeIdPair();
        }
        return compact('firstId', 'secondId');
    }
}
