<?php

namespace Modules\Pdf\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Pdf\Services\PDFService;
use Modules\Order\Entities\Order;

class PdfController extends Controller
{

	public function download(Request $request, Order $order){
		$order->load(['order_client', 'order_client.order_client_address', 'order_saller', 'order_payment', 'items']);	
		$pdf_service = new PDFService($order);
		$pdf_service->makePdf();
		return $pdf_service->download();
	}

}
