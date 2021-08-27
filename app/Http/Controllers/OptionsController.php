<?php

namespace App\Http\Controllers;

use App\Models\Options;
use App\Models\Result;
use Illuminate\Http\Request;

class OptionsController
{
    public function index()
    {
        if (empty(Options::select('value')->where('option', 'unit')->get())) {
            Options::crete(['option' => 'unit', 'value' => 'metric']);
        }
        $option = Options::select('value')->where('option', 'unit')->first();
        $result = Result::select('*')->get();
        return view('options', ['unit' => $option['value'], 'result' => $result]);
    }

    public function changeUnit(Request $request): \Illuminate\Http\RedirectResponse
    {
        $option = Options::where('option', 'unit')->first();
        $option->update($request->input());
        return redirect()->route('options')->with('success', 'Настройки изменены');
    }
}
