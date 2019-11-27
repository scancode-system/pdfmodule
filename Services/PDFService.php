<?php 

namespace Modules\Pdf\Services;


use Barryvdh\Snappy\Facades\SnappyPdf as PDF;
use Modules\Order\Entities\Order;

use Modules\Dashboard\Repositories\CompanyRepository;
use Modules\Pdf\Repositories\SettingPdfRepository;
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
		$this->pdf = PDF::loadView(PdfLayoutRepository::loadView(), 
			['order' => $this->order, 'company' => CompanyRepository::company(), 'setting_pdf' => $this->setting_pdf, 'setting_order' => $this->setting_order]);

		$this->pdf_file = $this->pdf->inline('pedido_'.$this->order->id.'.pdf');
		Storage::disk('public')->put('pedidos/pedido_'.$this->order->id.'.pdf', $this->pdf_file, 'public');
	}


	public function download(){
		return $this->pdf_file;
	}

	public function path(){
		return public_path('/storage/pedidos/pedido_'.$this->order->id.'.pdf');
	}

}