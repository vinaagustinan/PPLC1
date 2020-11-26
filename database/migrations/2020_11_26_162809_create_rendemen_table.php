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
            $table->timestamps();
            $table->bigInteger('NoAntrian');
            $table->date('tanggal');
            $table->bigInteger('BeratTebu');
            $table->bigInteger('NPP');
            $table->bigInteger('KNT');
            $table->bigInteger('HPB');
            $table->bigInteger('PSHK');
            $table->bigInteger('WR');
            $table->bigInteger('NilaiRendemen');
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
