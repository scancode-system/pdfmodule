<?php

namespace Modules\Pdf\Repositories;

use Modules\Pdf\Entities\SettingPdfColumn;


class SettingPdfColumnRepository
{

	// LOAD
	public static function load()
	{
		return SettingPdfColumn::all();
	}

	public static function loadById($id)
	{
		return SettingPdfColumn::find($id);
	}


	// COUNTS
	public static function countShowColumns()
	{
		return SettingPdfColumn::where('show', true)->count();
	}

	public static function countHideColumns()
	{
		return SettingPdfColumn::where('show', false)->count();
	}

	// CREATES
	public static function create($data)
	{
		return SettingPdfColumn::create($data);
	}

	// UPDATE
	public static function updateById($id, $data)
	{
		$setting_pdf_column = Self::loadById($id);
		$setting_pdf_column->update($data);
		return $setting_pdf_column;
	}

	// DELETE
	public static function deleteByName($name)
	{
		SettingPdfColumn::where('name', $name)->first()->delete();
	}

}
