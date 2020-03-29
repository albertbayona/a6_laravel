<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropietatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('propietats', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('lloc');
            $table->integer('metres2');
            $table->timestamps();
            //un apartament només tindrà un propietari
            $table->integer('user_id');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('propietats');
    }
}
