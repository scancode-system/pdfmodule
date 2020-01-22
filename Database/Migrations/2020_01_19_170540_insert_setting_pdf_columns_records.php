<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Modules\Pdf\Repositories\SettingPdfColumnRepository;

class InsertSettingPdfColumnsRecords extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        SettingPdfColumnRepository::create(['name' => 'image', 'alias' => 'Imagem']);
        SettingPdfColumnRepository::create(['name' => 'discount', 'alias' => 'Desconto']);
        SettingPdfColumnRepository::create(['name' => 'addition', 'alias' => 'Acrescimo']);
        SettingPdfColumnRepository::create(['name' => 'taxes', 'alias' => 'Impostos']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       SettingPdfColumnRepository::deleteByName('image');
       SettingPdfColumnRepository::deleteByName('discount');
       SettingPdfColumnRepository::deleteByName('addition');
       SettingPdfColumnRepository::deleteByName('taxes');
    }
}
