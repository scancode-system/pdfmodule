<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingPdfTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('setting_pdf', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('title');
            $table->integer('margin_top')->default(10);
            $table->text('statement_responsibility')->nullable();
            $table->text('global_observation')->nullable();

            $table->boolean('show_item_image')->default(1);
            $table->boolean('show_item_discount')->default(1);
            $table->boolean('show_item_addition')->default(1);
            $table->boolean('show_item_taxes')->default(1);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('setting_pdf');
    }
}
