<tr>
	<td class="align-middle">
		{{ $pdf_layout->title }}
	</td>
	<td class="align-middle">
		{{ $pdf_layout->description }}
	</td>
	<td class="align-middle">
		<span class="badge badge-{{ ($pdf_layout->selected)?'success':'danger' }} badge-pill py-2 px-4">{{ ($pdf_layout->selected)?'Selecionado':'Não Selecionado' }}</span>
	</td>
	<td class="align-middle">
		@if(!$pdf_layout->selected)
		{{ Form::open(['route' => ['pdf_layouts.update', $pdf_layout], 'method' => 'put']) }}
		{{ Form::button('<i class="fa fa-toggle-off"></i><span>Selecionar</span>', ['class' => 'btn btn-brand btn-primary', 'type' => 'submit']) }}
		{{ Form::close() }}
		@endif
	</td>
</tr>