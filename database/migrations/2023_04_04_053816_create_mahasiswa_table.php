<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMahasiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->uuid('mahasiswa_id')->primary();
            $table->integer('mahasiswa_nim')->unique();
            $table->string('mahasiswa_nama');
            $table->string('mahasiswa_email');
            $table->string('mahasiswa_no_telepon', 15);
            $table->string('mahasiswa_jenis_kelamin');
            $table->string('mahasiswa_alamat');
            $table->timestamp('mahasiswa_dibuat_pada', 0)->nullable();
            $table->timestamp('mahasiswa_diubah_pada', 0)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mahasiswa');
    }
}
