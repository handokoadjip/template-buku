<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDosenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dosen', function (Blueprint $table) {
            $table->uuid('dosen_id')->primary();
            $table->integer('dosen_nip')->unique();
            $table->string('dosen_nama', 225);
            $table->string('dosen_email', 225);
            $table->string('dosen_no_telepon', 225);
            $table->string('dosen_alamat', 225);
            $table->timestamp('dosen_dibuat_pada', 0)->nullable();
            $table->timestamp('dosen_diubah_pada', 0)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dosen');
    }
}
