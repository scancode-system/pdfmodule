<div class="tab-pane {{ ($tab=='setting_pdf')?'show active':'' }}" >
	@alert_errors()
	@alert_success()

	<div class="row">
		<div class="col-md-6">
			{{ Form::model($setting_pdf, ['route' => 'setting_pdf.update', 'method' => 'put']) }}
			<div class="form-group">
				{{ Form::label('title', 'Título impresso no pedido') }}
				{{ Form::text('title', null, ['class' => 'form-control']) }}
			</div>
			<div class="form-group">
				{{ Form::label('margin_top', 'Margem Top') }}
				{{ Form::number('margin_top', null, ['class' => 'form-control']) }}
			</div>
			<div class="form-group">
				{{ Form::label('global_observation', 'Observação') }}
				{{ Form::textarea('global_observation', null, ['class' => 'form-control', 'placeholder' => '']) }}
			</div>
			<div class="form-group">
				{{ Form::label('statement_responsibility', 'Termo') }}
				{{ Form::textarea('statement_responsibility', null, ['class' => 'form-control', 'placeholder' => '']) }}
			</div>
			{{ Form::button('<i class="fa fa-save"></i><span>Salvar</span>', ['class' => 'btn btn-brand btn-primary', 'type' => 'submit']) }}
			{{ Form::close() }}
		</div>
		<div class="col-md-6">
			{{ Form::open(['route' => 'setting_pdf_columns.update', 'method' => 'put']) }}
			@foreach($setting_pdf_columns as $setting_pdf_column)
			<div class="form-group row">
				{{ Form::label($setting_pdf_column->id, $setting_pdf_column->alias, ['class' => 'col-sm-4 col-form-label']) }}
				<div class="col-sm-8">
					<label class="switch switch-primary switch-lg mb-0 ml-3">
						{{ Form::hidden('setting_pdf_columns['.$setting_pdf_column->id.']', 0) }}
						{{ Form::checkbox('setting_pdf_columns['.$setting_pdf_column->id.']', 1, $setting_pdf_column->show,['class' => 'switch-input']) }}
						<span class="switch-slider"></span>
					</label>
				</div>
			</div>
			@endforeach
			{{ Form::button('<i class="fa fa-save"></i><span>Salvar</span>', ['class' => 'btn btn-brand btn-primary', 'type' => 'submit']) }}
			{{ Form::close() }}


<!--
			{{ Form::model($setting_pdf, ['route' => 'setting_pdf.update', 'method' => 'put']) }}
			<div class="form-group row">
				{{ Form::label('show_item_image', 'Mostrar Imagem', ['class' => 'col-sm-4 col-form-label']) }}
				<div class="col-sm-8">
					<label class="switch switch-primary switch-lg mb-0 ml-3">
						{{ Form::hidden('show_item_image', 0) }}
						{{ Form::checkbox('show_item_image', 1, null,['class' => 'switch-input']) }}
						<span class="switch-slider"></span>
					</label>
				</div>
			</div>
			<div class="form-group row">
				{{ Form::label('show_item_discount', 'Mostrar Desconto', ['class' => 'col-sm-4 col-form-label']) }}
				<div class="col-sm-8">
					<label class="switch switch-primary switch-lg mb-0 ml-3">
						{{ Form::hidden('show_item_discount', 0) }}
						{{ Form::checkbox('show_item_discount', 1, null,['class' => 'switch-input']) }}
						<span class="switch-slider"></span>
					</label>
				</div>
			</div>
			<div class="form-group row">
				{{ Form::label('show_item_addition', 'Mostrar Acréscimo', ['class' => 'col-sm-4 col-form-label']) }}
				<div class="col-sm-8">
					<label class="switch switch-primary switch-lg mb-0 ml-3">
						{{ Form::hidden('show_item_addition', 0) }}
						{{ Form::checkbox('show_item_addition', 1, null,['class' => 'switch-input']) }}
						<span class="switch-slider"></span>
					</label>
				</div>
			</div>
			<div class="form-group row">
				{{ Form::label('show_item_taxes', 'Mostrar Impostos', ['class' => 'col-sm-4 col-form-label']) }}
				<div class="col-sm-8">
					<label class="switch switch-primary switch-lg mb-0 ml-3">
						{{ Form::hidden('show_item_taxes', 0) }}
						{{ Form::checkbox('show_item_taxes', 1, null,['class' => 'switch-input']) }}
						<span class="switch-slider"></span>
					</label>
				</div>
			</div>		
			{{ Form::button('<i class="fa fa-save"></i><span>Salvar</span>', ['class' => 'btn btn-brand btn-primary', 'type' => 'submit']) }}
			{{ Form::close() }}-->
			<table class="table table-responsive-sm bg-white table-hover border mb-0 mt-3">
				@include('pdf::loader.settings.tables.thead')
				<tbody>
					@each('pdf::loader.settings.tables.tr', $pdf_layouts, 'pdf_layout')
				</tbody>
			</table>
		</div>
	</div>
</div>
