<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoryPembayaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('history_pembayarans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('anggota_id');
            $table->integer('jumlah_pemasukan');
            $table->foreign('anggota_id')->references('id')->on('data_anggotas');
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
        Schema::dropIfExists('history_pembayarans');
    }
}
