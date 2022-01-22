<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataTabungansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_tabungans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('anggota_id');
            $table->integer('jumlah_tabungan');
            $table->foreign('anggota_id')->references('id')->on('data_anggotas')->onDelete('cascade');
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
        Schema::dropIfExists('data_tabungans');
    }
}