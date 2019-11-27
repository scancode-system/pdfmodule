<?php

namespace Modules\Pdf\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Pdf\Http\Requests\SettingPdfRequest;
use Modules\Pdf\Repositories\SettingPdfRepository;

class SettingPdfController extends Controller
{

    public function update(SettingPdfRequest $request)
    {
        SettingPdfRepository::update($request->all());
        return back()->with('success', 'Configuração do PDF atualizado.');
    }

}
