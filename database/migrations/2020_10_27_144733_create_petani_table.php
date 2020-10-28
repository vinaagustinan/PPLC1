<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePetaniTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('petani', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->string('username');
            $table->string('email');
            $table->string('no_hp');
            $table->string('alamat');
            $table->string('alamat_lahan');
            $table->string('password');
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
        Schema::dropIfExists('petani');
    }
}
