<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePublicaciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publicacions', function (Blueprint $table) {
            $table->id();
            $table->string('titol');
            $table->string('disponibilitat');
            $table->timestamps();
            $table->integer('propietat_id')->unique();
            $table->foreign('propietat_id')->references('id')->on('propietats');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('publicacions');
    }
}
