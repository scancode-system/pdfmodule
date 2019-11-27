<?php

namespace Modules\Pdf\Entities;

use Illuminate\Database\Eloquent\Model;

class SettingPdf extends Model
{
	protected $table = 'setting_pdf';
	protected $fillable = ['id', 'title', 'margin_top'];
}
