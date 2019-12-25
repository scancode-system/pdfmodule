<thead>
	<tr>
		@if($setting_pdf->show_item_image)
		<th class="border-bottom border-top border-dark border-left p-2">Img</th>
		@endif
		<th class="border-bottom border-top border-dark {{ (!$setting_pdf->show_item_image)?'border-left':'' }} p-2">Ref</th>
		<th class="border-bottom border-top border-dark p-2">Descrição</th>
		<th class="border-bottom border-top border-dark p-2 text-center">Preço</th>
		@if($setting_pdf->show_item_discount)
		<th class="border-bottom border-top border-dark p-2 text-center">Desc</th>
		@endif
		@if($setting_pdf->show_item_addition)
		<th class="border-bottom border-top border-dark p-2 text-center">Acres</th>
		@endif
		@if($setting_pdf->show_item_taxes)
		<th class="border-bottom border-top border-dark p-2 text-center">Impostos</th>
		@endif
		<th class="border-bottom border-top border-dark p-2 text-center">Quant</th>
		<th class="border-bottom border-top border-dark border-right p-2 text-center">Total</th>
	</tr>
</thead>  