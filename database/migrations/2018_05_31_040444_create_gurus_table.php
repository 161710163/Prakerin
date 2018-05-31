<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGurusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gurus', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Name');
            $table->string('Kurikulum');
            $table->string('Jenis_Kelamin');
            $table->string('Pendidikan_Dasar');
            $table->unsignedInteger('berita_id');
            $table->foreign('berita_id')->references('id')->on('beritas')->ondelete(cascade);
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
        Schema::dropIfExists('gurus');
    }
}
