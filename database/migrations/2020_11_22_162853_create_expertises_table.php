<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpertisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expertises', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->string('nip');
            $table->string('email');
            $table->text('bidang_kepakaran');
            $table->string('satuan_kerja');
            $table->string('status_kepegawaian');
            $table->string('golongan');
            $table->text('bahasa');
            $table->text('pendidikan');
            $table->text('pengalaman');
            $table->text('kegiatan');
            $table->string('image');
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
        Schema::dropIfExists('expertises');
    }
}
