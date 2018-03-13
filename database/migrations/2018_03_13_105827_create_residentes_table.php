<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResidentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('residentes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sDNI');
            $table->string('sNombre');
            $table->string('sApellidos');
            $table->string('sAvatar');
            $table->string('sDireccion');
            $table->string('sTelefono1Tutor');
            $table->string('sTelefono2Tutor');
            $table->string('sNombreTutor');
            $table->string('sEmailTutor');
            $table->integer('idA');
            $table->integer('idU');
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
        Schema::dropIfExists('residentes');
    }
}
