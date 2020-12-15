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
            $table->bigInteger('NoAntrian');
            $table->date('tanggal');
            $table->bigInteger('BeratTebu')->nullable();
            $table->float('NPP')->nullable();
            $table->float('KNT')->nullable();
            $table->float('HPB')->nullable();
            $table->float('PSHK')->nullable();
            $table->float('WR')->nullable();
            $table->float('NilaiRendemen')->nullable();
            $table->bigInteger('hargaGiling')->nullable();
            $table->bigInteger('Biaya')->nullable();
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
