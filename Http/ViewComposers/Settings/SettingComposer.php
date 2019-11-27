<?php

namespace Modules\Pdf\Http\ViewComposers\Settings;

use Modules\Dashboard\Services\ViewComposer\ServiceComposer;
use Modules\Pdf\Repositories\SettingPdfRepository;
use Modules\Pdf\Repositories\PdfLayoutRepository;


class SettingComposer extends ServiceComposer {

    private $setting_pdf;
    private $pdf_layouts;

    public function assign($view){
        $this->settingPdf();
        $this->pdfLayouts();
    }


    private function settingPdf(){
        $this->setting_pdf = SettingPdfRepository::load();
    }


    private function pdfLayouts(){
        $this->pdf_layouts = PdfLayoutRepository::loadAll();
    }


    public function view($view){
        $view->with('setting_pdf', $this->setting_pdf);
        $view->with('pdf_layouts', $this->pdf_layouts);
    }

}