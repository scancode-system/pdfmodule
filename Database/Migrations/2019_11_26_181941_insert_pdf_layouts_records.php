<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Modules\Pdf\Repositories\PdfLayoutRepository;

class InsertPdfLayoutsRecords extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        PdfLayoutRepository::create(['title' => 'Padrão', 'description' => 'Este é o layout padrão do sistema contendo dados essênciais do sistema.', 'path' => 'pdf::pdf.order', 'selected' => true]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        PdfLayoutRepository::deleteByTitle('Padrão');
    }
}
