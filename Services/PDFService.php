<?php 

namespace Modules\Pdf\Services;


use Barryvdh\Snappy\Facades\SnappyPdf as PDF;
use Modules\Order\Entities\Order;

use Modules\Dashboard\Repositories\CompanyRepository;
use Modules\Pdf\Repositories\SettingPdfRepository;
use Modules\Pdf\Repositories\SettingPdfColumnRepository;
use Modules\Pdf\Repositories\PdfLayoutRepository;
use Modules\Order\Repositories\SettingOrderRepository;

use Illuminate\Support\Facades\Storage;


class PDFService {

	private $order;
	private $pdf;
	private $pdf_file;

	public function __construct(Order $order) {
		$this->order = $order;
		$this->setting_pdf = SettingPdfRepository::load();
		$this->setting_order = SettingOrderRepository::load();
	}


	public function makePdf(){
		//dd(PdfLayoutRepository::loadView());
		$this->pdf = PDF::loadView(PdfLayoutRepository::loadView(), 
			['order' => $this->order, 'company' => CompanyRepository::company(), 'setting_pdf' => $this->setting_pdf, 'count_show_columns' => SettingPdfColumnRepository::countShowColumns(), 'setting_order' => $this->setting_order]+$this->setting_columns())->setOption('footer-center', 'Page [page]')->setOption('footer-font-size', 8);

		$this->pdf_file = $this->pdf->inline('pedido_'.$this->order->id.'.pdf');
		Storage::disk('public')->put('pedidos/pedido_'.$this->order->id.'.pdf', $this->pdf_file, 'public');
	}


	private function setting_columns()
	{
		$columns = [];
		$setting_pdf_columns = SettingPdfColumnRepository::load();
		foreach ($setting_pdf_columns as $setting_pdf_column) {
			$columns['setting_pdf_'.$setting_pdf_column->name] = $setting_pdf_column;
		}
		return $columns;
	}

	public function download(){
		return $this->pdf_file;
	}

	public function path(){
		return public_path('/storage/pedidos/pedido_'.$this->order->id.'.pdf');
	}

}