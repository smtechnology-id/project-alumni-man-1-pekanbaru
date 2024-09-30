<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('datasets', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->string('jenis_kelamin');
            $table->integer('tahun_masuk');
            $table->integer('tahun_lulus');
            $table->string('provinsi');
            $table->string('kabupaten');
            $table->string('kecamatan');
            $table->string('desa');
            $table->string('no_hp');
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->string('pendidikan_terakhir');
            $table->string('kuliah');
            $table->string('bekerja');
            $table->string('berkeluarga');
            $table->string('menganggur');
            $table->string('jenis_perguruan_tinggi')->nullable();
            $table->integer('tahun_masuk_perguruan_tinggi')->nullable();
            $table->string('nama_perguruan_tinggi')->nullable();
            $table->string('program_studi')->nullable();
            $table->string('jenis_pekerjaan')->nullable();
            $table->string('nama_perusahaan')->nullable();
            $table->string('jabatan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('datasets');
    }
};
