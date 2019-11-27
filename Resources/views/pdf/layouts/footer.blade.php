<table class="w-100 mb-3">
	<tr>
		<td class="border border-dark height-75 width-130 text-center">
			Total bruto<br>
			@currency($order->total_gross)
		</td>
		<td class="text-center fs-30">-</td>
		<td class="border border-dark height-75 width-130 text-center">
			Desconto<br>
			@currency($order->discount_value)
		</td>
		<td class="text-center fs-30">+</td>
		<td class="border border-dark height-75 width-130 text-center">
			Acréscimo<br>
			@currency($order->addition_value)
		</td>
		<td class="text-center fs-30">=</td>
		<td class="border border-dark height-75 width-130 text-center">
			Total<br>
			@currency($order->total)
		</td>
	</tr>
</table>
<table class="w-100 mb-3">
	<tr>
		<td class="border border-dark">
			<p class="border-bottom border-dark p-1 mb-0" >Detalhes do Pedido</p>
			<table class="w-100 m-2">
				<tr>
					<td><strong>Pagamento: </strong>{{ $order->order_payment->description }}</td>
					<td><strong>Transportadora: </strong>{{ $order->order_shipping_company->description }}</td>
					<td><strong>Entrega: </strong>{{ $order->delivery_name }}</td>
				</tr>
			</table>
		</td>
	</tr>
</table>
<table class="w-100 mb-3">
	<tr>
		<td class="border border-dark p-2">
			<strong>OBSERVAÇÔES:</strong><br>
			<p class="p-0 mb-0">{!! nl2br($setting_order->global_observation) !!}</p>
			@if(!is_null($order->observation))
			<p class="mb-0 mt-3">{{ $order->observation }}</p>
			@endif
		</td>
	</tr>
</table>
<table class="w-100 mb-3">
	<tr>
		<td class="border border-dark p-2">
			<strong>TERMODE RESPONSABILIDADE:</strong><br>
			<p class="mb-0">{!! nl2br($setting_order->statement_responsibility) !!}</p>
		</td>
	</tr>
</table>
<p class="text-center fs-20 mb-0">São Paulo, {{ $order->closing_date ?? 'N/A' }}</p>
<p class="text-center fs-15">De acordo:</p>
<table class="w-50 m-auto">
		<tr>
			<td class="border-bottom border-dark height-75">
			</td>
		</tr>
	</table>
