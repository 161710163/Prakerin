<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEkstrakulikulersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ekstrakulikulers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Name');
            $table->unsignedInteger('Guru_Pembimbing');
            $table->foreign('Guru_Pembimbing')->references('id')->on('gurus')->ondelete(cascade);
            $table->string('Nama_Eks');
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
        Schema::dropIfExists('ekstrakulikulers');
    }
}
