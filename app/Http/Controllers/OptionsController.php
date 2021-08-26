<?php

namespace App\Http\Controllers;

use App\Models\Options;
use Illuminate\Http\Request;

class OptionsController
{
    public function index()
    {
        $option = Options::select('value')->where('option', 'unit')->first();
        return view('options', ['unit' => $option['value']]);
    }

    public function changeUnit(Request $request): \Illuminate\Http\RedirectResponse
    {
        $option = Options::where('option', 'unit')->first();
        $option->update($request->input());
        return redirect()->route('options')->with('success', 'Настройки изменены');
    }
}
