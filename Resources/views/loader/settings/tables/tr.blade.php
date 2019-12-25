<tr>
	<td class="align-middle">
		{{ $pdf_layout->title }}
	</td>
	<td class="align-middle">
		{{ $pdf_layout->description }}
	</td>
	<td class="align-middle">
		@if(!$pdf_layout->selected)
		{{ Form::open(['route' => ['pdf_layouts.update', $pdf_layout], 'method' => 'put']) }}
		{{ Form::button('Selecionar', ['class' => 'btn btn-primary', 'type' => 'submit']) }}
		{{ Form::close() }}
		@else
		{{ Form::button('Selecionado', ['class' => 'btn btn-primary', 'type' => 'submit', 'disabled' => 'disabled']) }}
		@endif
	</td>
</tr>