<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAntrianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('antrian', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('petani_id')->unsigned()->index();
            $table->bigInteger('pabrik_id')->unsigned()->index();
            $table->bigInteger('NoAntrian')->nullable();
            $table->date('tanggal')->format('dd, mm, YY')->nullable();
            $table->time('jam')->nullable();
            $table->string('nopol');
            $table->foreign('petani_id')->references('id')->on('petani');
            $table->foreign('pabrik_id')->references('id')->on('pabrik');
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
        Schema::dropIfExists('antrian');
    }
}
