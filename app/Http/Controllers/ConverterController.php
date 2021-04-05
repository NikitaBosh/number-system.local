<?php

namespace App\Http\Controllers;

use Converter;
use App\Http\Requests\ConverterRequest;


class ConverterController extends Controller
{
    /**
     * Точка входа в приложение
     *
     * @return View представление
     */
    public function index()
    {
        return view('index');
    }
    /**
     * Обработка данных
     *
     * @return View представление
     */
    public function Converter(ConverterRequest $request)
    {
        return view('index', [
        'octal_number_system' => $request['octal_number_system'],
        'result' => Converter::convert3to10($request['octal_number_system'])
        ]);
    }
}
