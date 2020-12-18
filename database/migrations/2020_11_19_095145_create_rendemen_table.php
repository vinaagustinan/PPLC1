<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRendemenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rendemen', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_antrian')->unsigned()->index();
            $table->date('tanggal');
            $table->bigInteger('BeratTebu')->nullable();
            $table->double('NPP')->nullable();
            $table->double('KNT')->nullable();
            $table->double('HPB')->nullable();
            $table->double('PSHK')->nullable();
            $table->double('WR')->nullable();
            $table->double('rendemenSementara')->nullable();
            $table->bigInteger('hargaGiling')->nullable();
            $table->bigInteger('Biaya')->nullable();
            $table->foreign('id_antrian')->references('id')->on('antrian');
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
        Schema::dropIfExists('rendemen');
    }
}
