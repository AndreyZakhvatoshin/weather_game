<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

/**
 * @OA\Info(
 *     title="API документация Rozetta",
 *     version="0.0.1",
 * )
 * @OA\Tag(
 *     name="OPP_Contracts",
 *     description="OPP",
 * )
 * @OA\Tag(
 *     name="sql-grid",
 *     description="Построитель кастоных sql-grid",
 * )
 * @OA\Tag(
 *     name="Line",
 *     description="Методы для работы с Line24",
 * )
 * @OA\Tag(
 *     name="ARM",
 *     description="Методы для работы с ARM",
 * )
 * @OA\Tag(
 *      name="Traffic",
 *      description="Автоматическая проверка закрытия расчетного периода",
 * )
 * @OA\Tag(
 *     name="FlexBill.Contragents",
 *     description="Модуль контрагентов",
 * )
 */

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
