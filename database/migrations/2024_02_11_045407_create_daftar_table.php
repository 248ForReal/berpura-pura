<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDaftarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daftar', function (Blueprint $table) {
            $table->id();
            $table->string('kampus_id');
            $table->foreign('kampus_id')->references('npsn')->on('kampus');
            $table->tinyInteger('semester')->unsigned();
            $table->string('nama_lengkap');
            $table->string('email')->unique();
            $table->string('nomor_hp');
            $table->string('nomor_wa');
            $table->enum('hobi', ['musik', 'games', 'video', 'bisnis']);
            $table->string('tempat_nongkrong_favorit');
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
        Schema::dropIfExists('daftar');
    }
}
