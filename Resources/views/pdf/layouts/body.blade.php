<table class="w-100 mb-3">
	@include('pdf::pdf.tables.thead')
	<tbody>
		@each('pdf::pdf.tables.tr', $order->items, 'item')
	</tbody>
</table>