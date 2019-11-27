<?php

namespace Modules\Pdf\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Pdf\Repositories\PdfLayoutRepository;
use Modules\Pdf\Entities\PdfLayout;

class PdfLayoutController extends Controller
{

    public function update(Request $request, PdfLayout $pdf_layout)
    {
        PdfLayoutRepository::select($pdf_layout);
        return back()->with('success', 'Layout "<strong>'.$pdf_layout->title.'</strong>"" selecionado.');
    }


}
