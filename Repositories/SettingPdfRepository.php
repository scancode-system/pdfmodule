<?php

namespace Modules\Pdf\Repositories;

use Modules\Pdf\Entities\SettingPdf;


class SettingPdfRepository
{
	// CREATES
	public static function init(){
		return SettingPdf::create(['title' => '', 'global_observation' => '', 'statement_responsibility' => '']);
	}

	// LOADS
	public static function load(){
		return $setting_pdf = SettingPdf::first();
	}

	// UPDATES
	public static function update($data){
		(SettingPdf::first())->update($data);
	}


	// DESTOY
	public static function end(){
		return SettingPdf::truncate();
	}

}
