<?php

namespace Modules\Pdf\Repositories;

use Modules\Pdf\Entities\SettingPdf;
use Modules\Pdf\Entities\PdfLayout;

class PdfLayoutRepository
{

	// LOADS
	public static function loadAll(){
		return PdfLayout::all();
	}

	public static function loadView(){
		return PdfLayout::where('selected', true)->first()->path;
	}


	// CREATES
	public static function create($data){
		return PdfLayout::create($data);
	}

	// UPDATE
	public static function select(PdfLayout $pdf_layout_selected){
		$pdf_layouts = PdfLayout::all();
		foreach ($pdf_layouts as $pdf_layout) {
			$pdf_layout->update(['selected' => false]);
		}
		$pdf_layout_selected->update(['selected' => true]);
	}

	// DELETE
	public static function deleteByTitle($title){
		PdfLayout::where('title', $title)->first()->delete();
	}

}
