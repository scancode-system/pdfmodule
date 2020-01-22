<?php

namespace Modules\Pdf\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Pdf\Repositories\SettingPdfColumnRepository;

class SettingPdfColumnController extends Controller
{


    public function update(Request $request)
    {
        foreach ($request->setting_pdf_columns as $id => $show) {
            SettingPdfColumnRepository::updateById($id, ['show' => $show]);
        }
        return back()->with('success', 'Configuração do PDF atualizado.');
    }

}
