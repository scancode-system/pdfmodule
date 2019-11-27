<div class="tab-pane {{ ($tab=='setting_pdf')?'show active':'' }}" >
	@alert_errors()
	@alert_success()
	{{ Form::model($setting_pdf, ['route' => 'setting_pdf.update', 'method' => 'put']) }}
	<div class="form-group">
		{{ Form::label('title', 'Título impresso no pedido') }}
		{{ Form::text('title', null, ['class' => 'form-control']) }}
	</div>
	<div class="form-group">
		{{ Form::label('margin_top', 'Margem Top') }}
		{{ Form::number('margin_top', null, ['class' => 'form-control']) }}
	</div>
	{{ Form::button('<i class="fa fa-save"></i><span>Salvar</span>', ['class' => 'btn btn-brand btn-primary', 'type' => 'submit']) }}
	{{ Form::close() }}
	<table class="table table-responsive-sm bg-white table-hover border mb-0 mt-3">
		@include('pdf::loader.settings.tables.thead')
		<tbody>
			@each('pdf::loader.settings.tables.tr', $pdf_layouts, 'pdf_layout')
		</tbody>
	</table>
</div>
