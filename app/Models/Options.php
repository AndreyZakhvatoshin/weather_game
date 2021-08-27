<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Options extends Model
{
    use HasFactory;

    /**
     * Таблица хранения данных модели
     *
     * @var string
     */
    protected $table = 'options';

    /**
     * Поля, доступные для массового заполнения.
     *
     * @var array
     */
    protected $fillable = ['option', 'value'];

    public $timestamps = false;

}
