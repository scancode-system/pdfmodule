<?php

namespace Modules\Pdf\Entities;

use Illuminate\Database\Eloquent\Model;

class SettingPdf extends Model
{
	protected $table = 'setting_pdf';
	//protected $fillable = ['id', 'title', 'margin_top', 'statement_responsibility', 'global_observation'];
	protected $guarded = [];


	public function getCountHiddenColumnsAttribute()
	{
		$count = 0;
		if(!$this->show_item_image)
		{
			$count++;
		}
		if(!$this->show_item_discount)
		{
			$count++;
		}
		if(!$this->show_item_addition)
		{
			$count++;
		}
		if(!$this->show_item_taxes)
		{
			$count++;
		}
		return $count;
	}

}
