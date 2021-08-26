<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    use HasFactory;

    /**
     * Таблица хранения данных модели
     *
     * @var string
     */
    protected $table = 'results';

    /**
     * Поля, доступные для массового заполнения.
     *
     * @var array
     */
    protected $fillable = ['city_1', 'city_2', 'result'];

    public $timestamps = false;
}
